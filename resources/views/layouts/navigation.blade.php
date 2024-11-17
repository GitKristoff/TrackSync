
<div class="flex h-screen bg-gray-100 sticky top-0">

    <!-- Toggle Button -->
    <button id="toggle-sidebar-btn" class="absolute top-4 left-64 p-2 bg-gray-200 rounded-md shadow-md z-50 hover:bg-gray-300 focus:outline-none transition-all duration-300 ease-in-out">
        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    
    <!-- Sidebar -->
    <aside id="sidebar"
    class="absolute top-0 left-0 bg-white h-screen w-64 shadow-md flex flex-col transform translate-x-0 transition-transform duration-300 ease-in-out">

        <div class="flex items-center justify-start p-6 h-16 border-b bg-slate-500">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('images/tracksync-templogo.png') }}" 
                     alt="TrackSync Logo" 
                     class="w-10 shadow-sm rounded-full border-stone-500">
            </a>
            <h2 class="p-3 text-white text-xl font-bold">TrackSync</h2>
        </div>
        <nav class="mt-4 flex-1 overflow-y-auto">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" 
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M3 10h18M9 21H5a2 2 0 01-2-2v-4h6v6z" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" 
                    class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M9 21H5a2 2 0 01-2-2v-4h6v6z" />
                        </svg>
                        Bus Status
                    </a>
                </li>
                <!-- Profile Collapsible Menu -->
                <li>
                    <button 
                        onclick="toggleMenu('profile-menu')" 
                        class="flex items-center w-full px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Settings
                        <svg id="profile-icon" class="w-4 h-4 ml-auto transition-transform transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul id="profile-menu" class="hidden ml-6 space-y-2">
                        <li>
                            <a href="{{ route('profile.edit') }}" 
                            class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" 
                            class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                                Feedback
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}" 
                            class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
                                Help & Support
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900 w-full text-left">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.403-2.807a1 1 0 00-.76-.48h-8.675M9 13v6m0 0v6m0-6h6m6-6h.33" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </aside>
</div>


{{-- JavaScript Functions --}}
<script>
    // Collapsible menu for Settings
        function toggleMenu(menuId) {
        const menu = document.getElementById(menuId);
        const icon = document.getElementById(`${menuId}-icon`);

        // Toggle the visibility of the menu
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            menu.classList.add('block');
            if (icon) icon.classList.add('rotate-180');
        } else {
            menu.classList.add('hidden');
            menu.classList.remove('block');
            if (icon) icon.classList.remove('rotate-180');
        }
    }

    // Collapsible Menu
    // document.getElementById('toggle-sidebar-btn').addEventListener('click', () => {
    //     const sidebar = document.getElementById('sidebar');
    //     const button = document.getElementById('toggle-sidebar-btn');

    //     // Toggle the sidebar visibility
    //     const isOpen = !sidebar.classList.contains('-translate-x-full');
    //     sidebar.classList.toggle('-translate-x-full', isOpen);
    //     sidebar.classList.toggle('translate-x-0', !isOpen);

    //     // Adjust button position dynamically
    //     button.style.transform = isOpen ? 'translateX(0)' : 'translateX(16rem)'; // 16rem matches sidebar width
    // });

    document.getElementById('toggle-sidebar-btn').addEventListener('click', () => {
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('main-content');
        const button = document.getElementById('toggle-sidebar-btn');


        // Toggle sidebar visibility
        const isOpen = !sidebar.classList.contains('-translate-x-full');
        sidebar.classList.toggle('-translate-x-full', isOpen);
        sidebar.classList.toggle('translate-x-0', !isOpen);

        // Adjust main content margin
        if (isOpen) {
            content.classList.remove('ml-64');
        } else {
            content.classList.add('ml-64'); 
        }

       // Adjust button position dynamically
       button.style.left = isOpen ? '-0.5rem' : '16rem';
       
    });

</script>
