<div class="h-full w-full">
   <nav class="w-full bg-white shadow">
       <div class="container mx-auto flex justify-between items-center h-16 text-gray-800">
           <!-- Draw the app icon & app name -->
           <div class="flex items-center">
               <a href="{{ route('home.index') }}" class="logo">Algoland NFT Market</a>
           </div>


           <!-- Draw the menu items -->
           <ul class="flex items-center">
               <li class="cursor-pointer flex items-center text-sm text-gray-800 hover:text-primary transition duration-150 ease-in-out mx-10 tracking-normal">
                   <a href="{{ route('explore.index') }}"
                       class="flex items-center focus:text-primary">
                       <svg class="mr-2 w-4 icon feather feather-compass" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
                       </svg>
                       Collections
                   </a>
               </li>

               <li class="cursor-pointer flex items-center text-sm text-gray-800 hover:text-primary transition duration-150 ease-in-out mx-10 tracking-normal">
                   <a href="{{ route('collection.index') }}"
                      class="flex items-center focus:text-primary">
                       <svg class="mr-2 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                       </svg>
                       My NFT
                   </a>
               </li>
               <li class="cursor-pointer flex items-center text-sm text-gray-800 hover:text-primary transition duration-150 ease-in-out mx-10 tracking-normal">
                   <a href="https://github.com/sheikhsid/algoland-nft-market" target="_blank"
                       class="flex items-center focus:text-primary">
                       <svg class="mr-2 w-4 icon feather-github" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                       </svg>
                       Github
                   </a>
               </li>
           </ul>

           <div class="flex items-center">
               <!-- Draw the create NFT button -->
               <a href="{{ route('asa.create') }}" class="cursor-pointer text-white purple-to-orange-horizontal mx-10 rounded-full px-3 py-2 uppercase text-sm font-bold">
                   Create
               </a>

               <!-- Draw the avatar -->
               <a href="{{ route('wallet.index') }}" class="hover:text-primary">
                   <svg class="w-6 icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                   </svg>
               </a>
           </div>
       </div>
   </nav>
</div>
