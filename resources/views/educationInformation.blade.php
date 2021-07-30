   <!-- DATA TABLE-->
   <table class="table table-borderless table-data3">
       <thead>
           <tr>
               <th>degree</th>
               <th>degree</th>
               <th>subject/mejor</th>
               <th>Institution(university/college/school)</th>
               <th>Passing year</th>
               <th>result</th>
               <th>out of</th>
           </tr>
       </thead>
       <tr>
           <td>2018-09-29 05:57</td>
           <td>Mobile</td>
           <td>iPhone X 64Gb Grey</td>
           <td>$999.00</td>
           <td class="process">Processed</td>
           <td>$999.00</td>
       </tr>
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
               success: function(response) {
                   console.log(response);
               }
           });
       });
   </script>
