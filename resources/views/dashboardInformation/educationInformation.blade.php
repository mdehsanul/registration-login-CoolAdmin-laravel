   <!-- DATA TABLE-->
   <table class="table table-borderless table-data3">
       <thead>
           <tr>
               <th>degree</th>
               <th>subject/mejor</th>
               <th>Institution(university/college/school)</th>
               <th>Passing year</th>
               <th>result</th>
               <th>out of</th>
           </tr>
       </thead>
       <tbody id="bodyData">
       </tbody>
   </table>
   <!-- END DATA TABLE-->

   <!-- Jquery JS-->
   <script src="vendor/jquery-3.2.1.min.js"></script>

   {{-- display education using ajax --}}
   <script>
       $(document).ready(function() {
           var educations = [];
           var id = $("#user_id").val();
           var data = {
               id: id,
               educations: JSON.stringify(educations),
               _token: '{{ csrf_token() }}'
           };

           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });

           $.ajax({
               url: "education/" + id + "/geteducationdata",
               method: "GET",
               data: data,
               cache: false,
               contentType: 'application/json; charset=utf-8',
               processData: false,
               success: function(response, status, xhr) {
                   //    console.log(response);
                   var rows = '';
                   $.each(response, function(key, value) {
                       rows = rows + '<tr>';
                       rows = rows + '<td>' + value.degree + '</td>';
                       rows = rows + '<td>' + value.subject + '</td>';
                       rows = rows + '<td>' + value.institute + '</td>';
                       rows = rows + '<td>' + value.year + '</td>';
                       rows = rows + '<td class="process">' + value.result + '</td>';
                       rows = rows + '<td>' + value.out_of + '</td>';
                       rows = rows + '</tr>';
                   });

                   $("#bodyData").html(rows);

                   console.log(status);
                   console.log(xhr);
               },
               complete: function(data) {
                   console.log('complete')
               },
               error: function(data) {
                   console.log('error')
               },
           });
       });
   </script>
