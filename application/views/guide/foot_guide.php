  <div class="container">
    <div class="row">
      <div class="col-md-12 py-5">
      </div>
    </div>
  </div>
  </div>

  <script src="<?= site_url('assets/js/plugins.js'); ?>"></script>
  <script src="<?= site_url('assets/js/theme.js'); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js" integrity="sha512-suUtSPkqYmFd5Ls30Nz6bjDX+TCcfEzhFfqjijfdggsaFZoylvTj+2odBzshs0TCwYrYZhQeCgHgJEkncb2YVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="<?= site_url('assets/js/appup.js'); ?>"></script>

  <script>
    function toggleIframe() {
      var iframeContainer = document.getElementById('iframeContainer');
      var chatfloatingBubble = document.getElementById('chatfloatingBubble');
      var textBubble = document.getElementById('textBubble');
      if (iframeContainer.style.display === 'block') {
        iframeContainer.style.display = 'none';
      } else {
        iframeContainer.style.display = 'block';
      }
    }
  </script>
  </body>
  </body>

  </html>