        </div>
      </section>

    </section>
  </div>

  <script src="<?= site_url('assets/js/plugins.js'); ?>"></script>
  <script src="<?= site_url('assets/js/theme.js'); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js" integrity="sha512-suUtSPkqYmFd5Ls30Nz6bjDX+TCcfEzhFfqjijfdggsaFZoylvTj+2odBzshs0TCwYrYZhQeCgHgJEkncb2YVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="<?= site_url('assets/js/appup.js'); ?>"></script>

  <script>
    const chatButton = document.getElementById('chatButton');
    const iframe = document.querySelector('iframe');

    chatButton.addEventListener('click', () => {
      iframe.style.display = iframe.style.display === 'none' ? 'block' : 'none';
    });
  </script>
</body>
</html>