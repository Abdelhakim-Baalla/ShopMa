<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - ShopMa</title>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="https://kit.fontawesome.com/010538ecba.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/resources/images/store-solid.png" type="image/x-icon">
</head>

<body class="font-[poppins] flex flex-col min-h-screen">

  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <i class="fa-solid fa-shop text-white"></i>
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Shop<p class="text-red-500 inline">Ma</p></span>
      </a>
      <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a id="cartButton" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <div class="flex items-center">
            <span class="w-10 text-2xl h-10 rounded-full text-center dark:text-white "><i class="fa-solid fa-bag-shopping text-2xl rounded-full text-center flex items-center dark:text-white "></i></span>
          </div>

        </a>

      </div>




      <div id="cart" class="fixed inset-0 overflow-hidden z-10 hidden transition delay-150 duration-300 ease-in-out" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 overflow-hidden">
          <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
              <div class="pointer-events-auto w-screen max-w-md">
                <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                  <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                    <div class="flex items-start justify-between">
                      <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Panier</h2>
                      <div class="ml-3 flex h-7 items-center">
                        <button type="button" id="closeCart" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500">
                          <span class="absolute -inset-0.5"></span>
                          <span class="sr-only">Close panel</span>
                          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    <div class="mt-8">
                      <div class="flow-root">
                        <ul role="list" id="items" class="-my-6 divide-y divide-gray-200">
                          
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                      <p>Total</p>
                      <div class="flex gap-1">
                        <span id="totalAmount"></span>
                        
                        <span>  MAD</span>
                      </div>
                    </div>
                    <div class="mt-6">
                      <a href="/produit/commande" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-xs hover:bg-indigo-700">Acheter</a>
                    </div>
                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                      <p>
                        Ou
                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500" id="continuer-achat">
                          Continuer L'achat
                          <span aria-hidden="true"> &rarr;</span>
                        </button>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Acceuil</a>
          </li>
          <li>
            <a href="/produit" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produit</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <main class="flex-grow">
    @yield('main')
  </main>



  <footer class="w-full p-4 bg-gray-900 border-t border-gray-200 shadow-sm md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="/" class="hover:underline">ShopMa™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
        <a href="#" class="hover:underline me-4 md:me-6">About</a>
      </li>
      <li>
        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
      </li>
      <li>
        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
      </li>
      <li>
        <a href="#" class="hover:underline">Contact</a>
      </li>
    </ul>
  </footer>


  <script>
    produits = null;
    document.getElementById("cartButton").addEventListener("click", function(event) {

      document.getElementById("cart").classList.remove("hidden");

      items = JSON.parse(localStorage.getItem('products'));
      // console.log(items);

      fetch('/produit/panier', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify(items)
        })
        .then((response) => response.json())
        .then((data) => displayproducts(data))


      function displayproducts(data) {
        
        const panier = document.getElementById("items")
        var total = 0;
        for (let i = 0; i < data.length; i++) {
          panier.innerHTML += data[i].map((player) => {
            total = total + (player.prix * player.quantity_selecter);            
            return ` <li class="flex py-6">
                      <div class="size-24 shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img src="${player.image}" alt="${player.titre}" class="size-full object-cover">
                      </div>

                      <div class="ml-4 flex flex-1 flex-col">
                        <div>
                          <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                              <a href="#">${player.titre}</a>
                            </h3>
                            <p class="ml-4">${player.prix * player.quantity_selecter} MAD</p>
                          </div>
                          <i class="mt-1 text-xs text-gray-500">${player.prix} MAD /TTC</i>
                        </div>
                        <div class="flex flex-1 items-end justify-between text-sm">
                          <p class="text-gray-500">Qty ${player.quantity_selecter}</p>
                          <input type="hidden" name="total_panier" id="total_panier" value="${total}">
                          
                          <div class="flex">
                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500" onclick = "deletePanier(${player.id})">Remove</button>
                          </div>
                        </div>
                      </div>
                    </li> `
          })
          
        }
        const totalAmount = document.getElementById('totalAmount');
        totalAmount.innerHTML = total;

      }



    })

    function deletePanier(id){
      var products = JSON.parse(localStorage.getItem('products'));

        for (let index = 0; index < products.length; index++) {
          if (products[index]['product'] == id) {
            products.splice(index, 1);
            localStorage.setItem('products', JSON.stringify(products));
            window.location.reload(); 
          }
        }
        
        // console.log("products");
    }


    document.getElementById("closeCart").addEventListener("click", function() {
      // document.getElementById("cart").classList.add("translate-x-full");  
      document.getElementById("cart").classList.add("hidden");
      const panier = document.getElementById("items");
      panier.innerHTML = '';
    });

    document.getElementById("continuer-achat").addEventListener("click", function() {
      // document.getElementById("cart").classList.add("translate-x-full");
      document.getElementById("cart").classList.add("hidden");
      const panier = document.getElementById("items");
      panier.innerHTML = '';
    });


    document.addEventListener("click", function(event) {
      let cart = document.getElementById("cart");
      let cartButton = document.getElementById("cartButton");
      let closeCart = document.getElementById("closeCart");


      if (!cartButton.contains(event.target) && !cart.contains(event.target) && event.target !== closeCart) {
        cart.classList.add("hidden");
      }
    });
  </script>
</body>

</html>