<div>
    <div style="display: flex ;justify-content:space-between" class="searchuser">
        <h4 class="card-title">Les Utilisateurs</h4>
        <input id="searchuser"  type="search" wire:model.live='searchuser' placeholder="User id">
    </div>
    <div class="table-responsive" style="height:80vh">
        <table class="table" >
            <thead>
                <tr>
                    <th>
                        <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                            </label>
                        </div>
                    </th>
                    <th> Nom d'utilisateur </th>
                    <th> Numero De Telephone </th>
                    <th> Etat </th>
                    <th> Niveau d'étude </th>
                    <th> Address </th>
                </tr>
            </thead>
            @if (count($userinfo)>=1)
                
            <tbody>
                @foreach ($userinfo as $userinfo)
                    <tr>
                        <td>
                            <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                        </td>
                        <td>
                            <img src="{{asset('admin/assets/images/male avatar.png')}}" alt="image" />
                            <span class="pl-">{{ $userinfo->name }}</span>
                        </td>
                        <td> {{ $userinfo->phone }} </td>
                        <td> 
                            @if ($userinfo->usertype == 0)
                                User
                            @elseif($userinfo->usertype == 1)
                                admin
                            @elseif($userinfo->usertype == 2)
                                veut être étudiant
                            @elseif($userinfo->usertype == 3)
                                étudiant
                            @endif 
                        </td>
                        <td> {{ $userinfo->cod_nv_etudiant }}</td>
                        <td> {{ $userinfo->address }} </td>
                        <td>
                            <form action="{{url('approvuser',$userinfo->id)}}" method="post">
                                @csrf
                                <button class="btn badge-outline-success">Approved</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            @else
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                </label>
                            </div>
                        </td>
                        <td>
                            <img src="{{asset('admin/assets/images/male avatar.png')}}" alt="image" />
                            <span class="pl-">{{ $user->name }}</span>
                        </td>
                        <td> {{ $user->phone }} </td>
                        <td> 
                            @if ($user->usertype == 0)
                                User
                            @elseif($user->usertype == 1)
                                admin
                            @elseif($user->usertype == 2)
                                veut être étudiant
                            @elseif($user->usertype == 3)
                                étudiant
                            @endif 
                        </td>
                        <td> {{ $user->cod_nv_etudiant }}</td>
                        <td> {{ $user->address }} </td>
                        <td>
                            <form action="{{url('approvuser',$user->id)}}" method="post">
                                @csrf
                                <button class="btn btn-outline-success">Approved</button>
                            </form>
                        </td>
                    </tr>
                @endforeach


            </tbody>
                
            @endif
        </table>
    </div>
</div>
