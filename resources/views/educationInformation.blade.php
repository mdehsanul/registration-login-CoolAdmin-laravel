  <!-- DATA TABLE-->
  {{-- @if ($educations->count()) --}}
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
      {{-- <tbody id="users-crud">
        @foreach ($users as $u_info)
            <tr id="user_id_{{ $u_info->id }}">
                <td>{{ $u_info->degree }}</td>
                <td>{{ $u_info->subject }}</td>
                <td>{{ $u_info->institute }}</td>
                <td>{{ $u_info->year }}</td>
                <td>{{ $u_info->result }}</td>
                <td>{{ $u_info->out_of }}</td>
            </tr>
        @endforeach
     </tbody> --}}

      <tbody id="users-crud">
          <tr>
              <td>2018-09-29 05:57</td>
              <td>Mobile</td>
              <td>iPhone X 64Gb Grey</td>
              <td>$999.00</td>
              <td class="process">Processed</td>
              <td>$999.00</td>
          </tr>
      </tbody>
      {{-- <tbody>
              @foreach ($educations as $education)
                  <tr id="education{{ $education->user_id }}">
                      <td>{{ $education->degree }}</td>
                      <td>{{ $education->subject }}</td>
                      <td>{{ $education->institute }}</td>
                      <td>{{ $education->year }}</td>
                      <td class="process">{{ $education->result }}</td>
                      <td>{{ $education->out_of }}</td>
                  </tr>
              @endforeach
          </tbody> --}}

      {{-- @foreach ($data['user_id'] as $education)
          <tbody>
              <tr>
                  <td>{{ $education['degree'] }}</td>
                  <td>{{ $education['subject'] }}</td>
                  <td>{{ $education['institute'] }}</td>
                  <td>{{ $education['year'] }}</td>
                  <td class="process">{{ $education['result'] }}</td>
                  <td>{{ $education['out_of'] }}</td>
              </tr>
          </tbody>
      @endforeach --}}
      <tbody>

      </tbody>
  </table>
  {{-- @endif --}}
  <!-- END DATA TABLE-->

  {{-- display education using ajax --}}
  {{-- <script>
      $(document).ready(function() => {
          get_education_data()

          function get_education_data() {
              $.ajax({
                  type: 'GET',
                  url: '{{ URL('update/' . $loginUserdata->user_id . '/show') }}',
                  data: {},
                  beforeSend: function() {
                      console.log('before')
                  },
                  success: function(data, status, xhr) {
                      console.log(data);
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
          }
      )
      });
  </script> --}}
  <script>
      $(document).ready(function() {

          get_education_data()
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          //Get all company
          function get_education_data() {

              $.ajax({
                  url: "{{ URL('update/' . $loginUserdata->user_id . '/show') }} ",
                  type: 'GET',
                  data: {}
              }).done(function(data) {
                  table_data_row(data.data)
              });
          }

          //Company table row
          function table_data_row(data) {

              var rows = '';

              $.each(data, function(key, value) {

                  rows = rows + '<tr>';
                  rows = rows + '<td>' + value.degree + '</td>';
                  rows = rows + '<td>' + value.subject + '</td>';
                  rows = rows + '<td>' + value.institute + '</td>';
                  rows = rows + '</td>';
                  rows = rows + '</tr>';
              });

              $("tbody").html(rows);
          }
      });
  </script>
