 <!-- Modal for Education Start -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h3 class="modal-title" id="exampleModalLabel">Education</h3>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div id="example-basic">
                     <form action="{{ route('addeducation') }}" method="post" id="example-advanced-form">
                         @csrf
                         <input type="hidden" name="user_id" id="user_id" value="{{ $loginUserdata['id'] }}">
                         <div class="form-group">
                             <label class="fw-bolder">Degree</label>
                             <select class="au-input au-input--full" name="degree" id="degree" style="height: 45px"
                                 required>
                                 <option value="" selected disabled>-- Choose here --</option>
                                 <option value="M.Sc(Master in Science)">M.Sc(Master in Science)</option>
                                 <option value="B.Sc(Bechalor in Science)">B.Sc(Bechalor in Science)</option>
                                 <option value="Honours">Honours</option>
                                 <option value="HSC(Higher School Certificate)">HSC(Higher School Certificate)
                                 </option>
                                 <option value="SSC(Secondary School Certificate)">SSC(Secondary School Certificate)
                                 </option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label class="fw-bolder">Subject/Mejor</label>
                             <select class="au-input au-input--full" id="subject" name="subject" style="height: 45px"
                                 required>
                                 <option value="" selected disabled>-- Choose here --</option>
                                 <option value="CSE(Computer Science and Engineering)">CSE(Computer Science and
                                     Engineering)</option>
                                 <option value="EEE(Electrical and Electronics Engineering)">EEE(Electrical and
                                     Electronics Engineering)</option>
                                 <option value="ECE(Electronics and Computer Engineering)">ECE(Electronics and
                                     Computer Engineering)
                                 </option>
                                 <option value="CE(Civil Engineering)">CE(Civil Engineering)</option>
                                 <option value="ME(Mechanical Engineering)">ME(Mechanical Engineering)</option>
                                 <option value="Business Administration">Business Administration</option>
                                 </option>
                                 <option value="English">English</option>
                                 <option value="Science">Science</option>
                                 <option value="Commerce">Commerce</option>
                                 <option value="Arts">Arts</option>
                             </select>
                         </div>
                         <div class="form-group">
                             <label class="fw-bolder">Institution(university/college/school)</label>
                             <input class="au-input au-input--full" type="text" id="institute" name="institute"
                                 required>
                         </div>
                         <div class="form-group">
                             <label class="fw-bolder">Passing year</label>
                             <input class="au-input au-input--full" type="date" id="year" name="year" required>
                         </div>
                         <div class="form-group">
                             <label class="fw-bolder">Result</label>
                             <input class="au-input au-input--full" type="number" step="any" id="result" name="result"
                                 required>
                         </div>
                         <div class="form-group">
                             <label class="fw-bolder">Out Of</label>
                             <select class="au-input au-input--full" id="out_of" name="out_of" style="height: 45px"
                                 required>
                                 <option value="" selected disabled>-- Choose here --</option>
                                 <option value="4.00">4.00</option>
                                 <option value="5.00">5.00</option>
                             </select>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn au-btn--green text-white" id="education">Submit</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 {{-- Modal for Education End --}}

 {{-- adding education using ajax --}}
 <script>
     $(document).ready(function() {
         $(document).on('click', '#education', function() {
             var user_id = $('#user_id').val();
             var degree = $('#degree').val();
             var subject = $('#subject').val();
             var institute = $('#institute').val();
             var year = $('#year').val();
             var result = $('#result').val();
             var out_of = $('#out_of').val();
             if (degree != "" && subject != "" && institute != "" && year != "" && result != "" &&
                 out_of != "") {
                 $.ajax({
                     url: "/addeducation",
                     type: "POST",
                     data: {
                         _token: $("#csrf").val(),
                         type: 1,
                         user_id: user_id,
                         degree: degree,
                         subject: subject,
                         institute: institute,
                         year: year,
                         result: result,
                         out_of: out_of
                     },
                     cache: false,
                     success: function(dataResult) {
                         console.log(dataResult);
                         var dataResult = JSON.parse(dataResult);
                         if (dataResult.statusCode == 200) {
                             window.location = "/addeducation";
                         } else if (dataResult.statusCode == 201) {
                             alert("Error occured !");
                         }

                     }
                 });
             } else {
                 alert('Please fill all the field !');
             }
         });
     });
 </script>
