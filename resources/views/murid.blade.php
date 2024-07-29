<x-app-layout>
    <body>
        <main class="container mx-auto px-4 py-8">
            <div class="bg-white rounded shadow-md p-4 dark:bg-gray-800">
                <form id="studentForm">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required />
                    </div>
                    <div class="mb-6">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                        <select id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <label for="classRoom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Room</label>
                        <input type="number" id="classRoom_id" name="classRoom_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required />
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            <div class="bg-white rounded shadow-md p-4 mt-8 dark:bg-gray-800">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">No</th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">Name</th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">Gender</th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">Class</th>
                            <th class="px-3 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="studentsTableBody" class="text-gray-900 dark:text-gray-100">
                        <!-- Data will be populated here by AJAX -->
                    </tbody>
                </table>
            </div>
        </main>
        {{-- <script type="text/javascript">
            $(document).ready(function() {
                fetch_data();
    
                function fetch_data() {
                    $.ajax({
                        url: "{{ route('students.index') }}",
                        method: "GET",
                        dataType: "json",
                        success: function(data) {
                            var html = '';
                            var no = 1;
                            $.each(data.data, function(index, student) {
                                html += '<tr>';
                                html += '<td class="px-3 py-2 border-b border-gray-200 bg-white text-sm">' + no + '</td>';
                                html += '<td class="px-3 py-2 border-b border-gray-200 bg-white text-sm">' + student.name + '</td>';
                                html += '<td class="px-3 py-2 border-b border-gray-200 bg-white text-sm">' + student.gender + '</td>';
                                html += '<td class="px-3 py-2 border-b border-gray-200 bg-white text-sm">' + (student.classes ? student.classes.name : 'N/A') + '</td>';
                                html += '<td class="px-3 py-2 border-b border-gray-200 bg-white text-sm">';
                                html += '<a href="/students/' + student.id + '/edit" class="text-blue-500 hover:text-blue-700 font-medium">Edit</a>';
                                html += '<a href="/students/' + student.id + '/delete" class="text-red-500 hover:text-red-700 font-medium ml-2">Delete</a>';
                                html += '</td>';
                                html += '</tr>';
                                no++;
                            });
                            $('#studentsTableBody').html(html);
                        }
                    });
                }
    
                $('#studentForm').on('submit', function(event) {
                    event.preventDefault();
                    $.ajax({
                        url: "{{ route('students.store') }}",
                        method: "POST",
                        data: $(this).serialize(),
                        success: function(response) {
                            fetch_data();
                            $('#studentForm')[0].reset();
                        }
                    });
                });
            });
        </script> --}}
    </body>
</x-app-layout>
