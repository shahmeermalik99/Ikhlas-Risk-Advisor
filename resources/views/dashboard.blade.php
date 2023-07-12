@extends('admin_view')
@section('content')

@php
  use App\Models\User;
  use Illuminate\Support\Facades\DB;
  $user = User::get();
@endphp

 <div class="main mt-5">
        <div class="container pt-5">

            <h5 class="mt-3   pb-2 pb-md-0 d-flex align-items-end">
                Registered Users
            </h5>

            <div class="tabel-section">
                <table id="web_app" class="mt-4 display device_table">

                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Passport No.</th>
                            <th scope="col">Agent Code</th>
                            <th scope="col">Agency Name</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Service Branch</th>
                            <th scope="col">QR Status</th>
                            <th scope="col">QR Code</th>
                            <th scope="col">Send Mail</th>
                            <th scope="col">Last Mail</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($user as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->passport_no}}</td>
                            <td>{{$user->agent_code}}</td>
                            <td>{{$user->agency_name}}</td>
                            <td>{{$user->phone_no}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->dropdown_menu}}</td>
                            @if($user->qr_status == '1')
                            <td scope="col"><span class="badge bg-success" style="padding:10px 6px 10px 6px; font-size:12px;">Scanned</span></td>
                            @elseif($user->qr_status == '0')
                            <td scope="col"><span class="badge bg-danger" style="padding:10px 6px 10px 6px; font-size:12px;">Not scan</span></td>
                            @endif
                            <td>
                                <a target="_blank"  href="{{$user->qr_link}}" download>
                                <img   style='width:100%;' src="{{$user->qr_link}}">
                                </a>
                            </td>
                            
                                <td scope="col">
                                <form action="{{ route('useremail') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    <button type="submit" class=" badge bg-danger" style="padding:10px 6px 10px 6px; font-size:12px;Text-decoration:none">Send Mail</button>
                                    </td>
                                </form>
                            <td scope="col">{{ $user->last_mail_time }}</td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.11/dist/sweetalert2.all.min.js"></script>
          <script>
            var msg = '{{ Session::get('success') }}';
            var exist = '{{ Session::has('success') }}';
            if (exist) {

                // alert(msg);
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                })

            }
        </script>
@endsection