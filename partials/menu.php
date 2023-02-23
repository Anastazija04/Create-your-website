
<nav
      id="navbar"
      class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top"
    >
      <a class="navbar-brand text-white" href="index.php">Webster</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills">
          <li class="nav-item">
            <a class="nav-link dropdown-item" href="#home"
              >Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-item" href="#about-us"
              >About us</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-item" href="#services">
              <?=$row['type_of_product']?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-item" href="#contact"
              >Contact</a
            >
          </li>
        </ul>
      </div>
    </nav>

