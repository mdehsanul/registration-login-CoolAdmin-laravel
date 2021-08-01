<table class="table  table-data3">
    <thead>
        <tr>
            <th>avatar</th>
            <th>name</th>
            <th>phone number</th>
            <th>email</th>
            <th>password</th>
            <th>date</th>
            <th>status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr class="tr-shadow">
            <td><img src="{{ asset('user_images/' . $loginUserdata->avatar) }}" style="height: 95px; width: 95px;">
            </td>
            <td style="text-align: center; vertical-align: middle;">
                {{ $loginUserdata->username }}</td>
            <td style="text-align: center; vertical-align: middle;">
                {{ $loginUserdata->phone_number }}</td>
            <td style="text-align: center; vertical-align: middle;">
                <span class="block-email">{{ $loginUserdata->email }}</span>
            </td>
            <td class="desc" style="text-align: center; vertical-align: middle;">
                {{ $loginUserdata->password }}</td>
            <td style="text-align: center; vertical-align: middle;">
                {{ $loginUserdata->created_at }}</td>
            <td style="text-align: center; vertical-align: middle;">
                <span class="status--process">Login</span>
            </td>
            <td style="text-align: center; vertical-align: middle;">
                <div class="table-data-feature">
                    <a href={{ 'updateform/' . $loginUserdata->id }} class="item " data-bs-toggle="modal"
                        data-bs-target="#exampleModal1" data-toggle="tooltip" data-placement="top" title="Update">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                        <i class="zmdi zmdi-more"></i>
                    </button>
                </div>
            </td>
        </tr>
    </tbody>
</table>
