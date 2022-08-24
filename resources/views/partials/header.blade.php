<header>
    <div>
        <div class="container">
          <section class="header_section">
            <!-- parte sinistra con logo -->
            <div class="col-sx">
              <div class="image-logo">
                <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC Comics" />
              </div>
            </div>
            <!-- parte destra con navigazione -->
            <div class="col-dx">
              <nav>
                <ul>
                  <li>
                    <a href="#">characters</a>
                  </li>
                  <li>
                    <a class="current" href="{{ route('comics') }}">comics</a>
                    <span class="underline"></span>
                  </li>
                  <li>
                    <a href="#">movies</a>
                  </li>
                  <li>
                    <a href="#">tv</a>
                  </li>
                  <li>
                    <a href="#">games</a>
                  </li>
                  <li>
                    <a href="#">collectibles</a>
                  </li>
                  <li>
                    <a href="#">videos</a>
                  </li>
                  <li>
                    <a href="#">fans</a>
                  </li>
                  <li>
                    <a href="#">news</a>
                  </li>
                  <li>
                    <a href="#">shop</a>
                  </li>
                </ul>
              </nav>
            </div>
          </section>
        </div>
      </div>
</header>