<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preboarding Applications</title>

    <!-- Vite CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/preboarding_table.js'])

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Preboarding Applications</h1>
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <table id="preboarding_table" class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Application ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Email Address</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Intern Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Phone Number</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Facebook Link</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Course</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">School Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">School Contact</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Hours Requirement</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Discord Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Orientation Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Start Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Tentative End Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                {{-- Data Population will be done here automatically. --}}
            </tbody>
        </table>
    </div>

    <!-- <script>
        $(document).ready(function() {
            $('#preboarding_table').DataTable({
                // Optional: Customize DataTables options
                paging: true,
                searching: true,
                ordering: true,
                responsive: true,
                lengthMenu: [5, 10, 25, 50],
            });
        });
    </script> -->
</body>
</html>
