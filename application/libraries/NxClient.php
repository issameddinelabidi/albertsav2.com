<?php

class NxClient
{
	protected $host;
	protected $headers;

	public $total_rows;

	public function __construct($params)
	{
		$host = trim($params[0], '/');
		$user = isset($params[1]) ? $params[1] : null;
		$password = isset($params[2]) ? $params[2] : null;
		$headers = isset($params[3]) ? $params[3] : [];

		$this->host = $host;
		$this->headers = $headers;

		if (!is_null($user) && !is_null($password)) {
			$this->headers[] = "Authorization: Basic " . base64encode($user . ":" . $password);
		}
	}

	protected function handle($type, $url, $params = null, $headers = [])
	{
		$curl = curl_init($this->host . $url);
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array_merge(array_values($this->headers), $headers));
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $type);

		if ($params) {
			// curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
			curl_setopt($curl, CURLOPT_POSTFIELDS, ($type == 'POST') ? $params : http_build_query($params));
		}

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$resp = curl_exec($curl);

		$resp = trim(str_replace("HTTP/1.1 100 Continue", "", $resp));

		list($headers, $content) = preg_split("/\n\s*?\n/m", $resp, 2);

		if (strpos($headers, "Nx-Error")) {
			$h = explode("\n", $headers);

			$error = ['code' => 0, 'message' => "Unknown error"];
			foreach ($h as $line) {
				$tmp = explode(':', $line, 2);
				switch (strtolower(trim($tmp[0]))) {
					case "nx-error-code":
						$error['code'] = (int) trim($tmp[1]);
						break;

					case "nx-error":
						$error['message'] = trim($tmp[1]);
						break;
				}
			}

			throw new \Exception($error['message'], $error['code']);

			die();
		}

		// var_dump(['$type' => $type, '$url' => $url, 'headers' => $headers]);
		if (strpos($headers, "Nx-Total-Rows")) {
			$h = explode("\n", $headers);

			foreach ($h as $line) {
				$tmp = explode(':', $line, 2);
				switch (strtolower(trim($tmp[0]))) {
					case "nx-total-rows":
						$this->total_rows = (int) trim($tmp[1]);
						break;
				}
			}
		}

		return json_decode(trim($content), true);
	}


	public function getList($object, array $conditions = [], array $headers = [])
	{
		return $this->handle("GET",  "/$object?" . http_build_query($conditions), null, $headers);
	}

	public function getOne($object, $id, array $params, array $headers = [])
	{
		return $this->handle("GET", "/$object/" . urlencode($id), $params, $headers);
	}

	public function create($object, array $params, array $headers = [])
	{
		return $this->handle("POST", "/$object/", $params, $headers);
	}

	public function update($object, $id, array $params, array $headers = [])
	{
		return $this->handle("PUT", "/$object/" . urlencode($id), $params, $headers);
	}

	public function patch($object, $id, $method, array $params = null, array $headers = [])
	{
		return $this->handle("PATCH", "/$object/" . urlencode($id) . '/' . urlencode($method), $params, $headers);
	}

	public function delete($object, $id, array $headers = [])
	{
		return $this->handle("DELETE", "/$object/" . urlencode($id), null, $headers, $headers);
	}
}
