<header>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href=" {{ route('home') }} ">
                        <img class="header-logo" src="{{ asset('images/marchio-sito-test.png') }}" alt="la Molisana - logo">
                    </a>
                </div>
            </div>
        </div>

        <div class="container-lg header-menu">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <div class="hamburger text-center">
                        <div>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <ul class="list-unstyled m-0 menu-links">
                        <li><a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">home</a></li>
                        <li><a href="#">grano italiano</a></li>
                        <li><a href="#">tenacità certificata</a></li>
                        <li><a href="#">chi siamo</a></li>
                        <li><a class="{{ Route::currentRouteName() == 'products' ? 'active' : '' }}" href="{{ route('products') }}">i prodotti</a></li>
                        <li><a href="#">food service</a></li>
                        <li><a href="#">le ricette</a></li>
                        <li><a href="#">l'impegno</a></li>
                        <li><a href="#">limited edition</a></li>
                        <li><a href="#">news</a></li>
                        <li><a href="#">
                            <svg class="mk-svg-icon" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M416.265 306.366c14.002-14.002 78.637-108.456 81.388-112.472 11.495-16.814 12.492-38.904 2.598-57.646-9.686-18.363-27.635-29.322-47.998-29.322h-329.568v-47.088c0-1.088-.107-2.146-.322-3.17-1.617-15.802-14.845-28.218-31.069-28.218h-54.933c-17.312 0-31.39 14.083-31.39 31.39v15.695c0 17.313 14.079 31.39 31.39 31.39h54.933v219.668c0 34.617 28.164 62.781 62.781 62.781h290.361c8.668 0 15.695-7.028 15.695-15.695s-7.028-15.695-15.695-15.695h-290.361c-17.289 0-31.344-14.043-31.383-31.325h243.422c27.719 0 38.272-8.41 50.151-20.293zm35.988-168.049c12.27 0 18.24 8.798 20.233 12.577 3.487 6.602 5.111 16.707-.751 25.283-31.529 46.12-70.192 100.524-77.664 107.996-8.078 8.074-11.097 11.097-27.957 11.097h-243.429v-156.953h329.568zm-415.892-62.781v-15.695h54.933v15.695h-54.933zm149.067 313.843c-25.958 0-47.079 21.121-47.079 47.086s21.121 47.086 47.079 47.086c25.965 0 47.093-21.121 47.093-47.086s-21.129-47.086-47.093-47.086zm0 62.78c-8.653 0-15.688-7.039-15.688-15.695 0-8.652 7.035-15.695 15.688-15.695 8.66 0 15.702 7.043 15.702 15.695 0 8.657-7.043 15.695-15.702 15.695zm204.007-62.78c-25.958 0-47.079 21.121-47.079 47.086s21.121 47.086 47.079 47.086c25.964 0 47.093-21.121 47.093-47.086s-21.13-47.086-47.093-47.086zm0 62.78c-8.653 0-15.688-7.039-15.688-15.695 0-8.652 7.035-15.695 15.688-15.695 8.66 0 15.702 7.043 15.702 15.695 0 8.657-7.043 15.695-15.702 15.695z">
                                </path>
                            </svg>
                            shop</a></li>
                        <li><a href="#">EN</a></li>
                        <li><a href="#">US</a></li>
                        <li><a href="#">FR</a></li>
                    </ul>
                </div>
            </div>

            <div class="finder-icon">
                <svg class="mk-svg-icon" style=" height:24px; width: 22.285714285714px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1664 1792">
                    <path d="M1152 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z">
                    </path>
                </svg>
            </div>

            <div class="finder d-none text-uppercase">
                <p>inizia a digitare  premi enter per effettuare una ricerca</p>

                <form>
                    <input type="text">

                    <svg class="finder-start" style=" height:24px; width: 22.285714285714px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1664 1792">
                        <path d="M1152 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z">
                        </path>
                    </svg>
                </form>

                <svg class="finder-closer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M390.628 345.372l-45.256 45.256-89.372-89.373-89.373 89.372-45.255-45.255 89.373-89.372-89.372-89.373 45.254-45.254 89.373 89.372 89.372-89.373 45.256 45.255-89.373 89.373 89.373 89.372z">
                    </path>
                </svg>
            </div>
        </div>
    </section>
</header>
