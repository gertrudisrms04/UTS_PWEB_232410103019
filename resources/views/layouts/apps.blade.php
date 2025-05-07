<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/app.css" rel="stylesheet">
    <script src="{{ asset('js/navbar.js')}}" defer></script>
    <style>
        #sidebar {
            width: 250px;
            transition: all 0.3s;
        }
        #sidebar.collapsed {
            margin-left: -250px;
        }
        #main-content {
            transition: margin-left 0.3s;

        }
        #main-content.expanded {
            margin-left: 0;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-column vh-100">
        @include('components.topnavbar')
        <div class="d-flex flex-grow-1">
            <div id="sidebar" class="bg-light border-end" style="width: 250px;">
                @yield('sidebar')
            </div>

            <div class="flex-grow-1 p-3" id="main-content">
                @yield('content')
                @yield('footer')
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');
            toggleBtn.addEventListener('click', function () {
                sidebar.classList.toggle('d-none');
            });
        });
    </script>
</body>
</html>
