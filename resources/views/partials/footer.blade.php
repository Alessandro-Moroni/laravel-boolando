<footer>
    <div class="container">
        <div class="footer-col">
          <h4>Boolando s.r.l</h4>
          <nav>
            <ul>
              <li><a href=""></a>Informazioni legali</li>
              <li><a href=""></a>Informativa sulla privacy</li>
              <li><a href=""></a>Diritto di recesso</li>
            </ul>
          </nav>
        </div>

        <div class="footer-col">
          <h5>Trovaci anche su</h5>

          <p>
            <nav>
              <ul>
                <li v-for="(item, index) in mainSocial" :key="`s-${index}`"><a href="item.href" v-html="`${item.text}`"></a></li>
              </ul>
            </nav>
          </p>
        </div>
      </div>
</footer>
