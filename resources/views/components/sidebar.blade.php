<div id="sidebar" class="bg-dark text-white h-100 p-4" top: 0; transition: left 0.3s; z-index: 1040;">
    <hr class="text-white">
    <ul class="list-unstyled">
        <li><a href="/dashboard" class="text-white d-block py-2">Dashboard</a></li>
        <li><a href="/pengelolaan" class="text-white d-block py-2">Pengelolaan</a></li>
    </ul>
</div>

<script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    toggleBtn.addEventListener('click', () => {
        const currentLeft = window.getComputedStyle(sidebar).left;
        sidebar.style.left = (sidebar.style.left === '0px') ? '-250px' : '0px';
    });
</script>
