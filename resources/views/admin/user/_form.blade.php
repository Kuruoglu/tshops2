<div class="form-group d-flex">

    <div class="row mr-2" >

        <input type="text" class="form-control mb-2 " name="email" placeholder="Email пользователя" value="{{old('email', $user->email ?? '')}}">
        <input type="text" class="form-control mb-2" name="name" placeholder="Имя пользователя" value="{{old('name', $user->name ?? '')}}">
        <input type="{{$user ? 'hidden' : 'text'}}" class="form-control mb-2" name="password" placeholder="Пароль пользователя" value="{{old('password', $user->password ?? '')}}">
        <select name="role" class="form-control mb-2">
            <option value="null"checked>Выберите роль для пользователя</option>
            <option value="user" >Пользователь</option>
            <option value="admin">Администратор</option>
            <option value="organizer">Организатор</option>
        </select>
        <input type="text" class="form-control mb-2" name="phone" placeholder="Телефон пользователя" value="{{old('phone', $user->phone ?? '')}}">
        <input type="text" class="form-control mb-2" name="company" placeholder="Название организатора" value="{{old('company', $user->company ?? '')}}">

    </div>
    <div>
        <div style="width: 200px; height: 221px; background-color: #0c525d" class="ml-2 mb-2">
            @if (isset($user->img))
                <img src="{{$user->img}}" alt="{{$user->name}}">
            @else
                <img src="" alt="">
           @endif
        </div>
        <div>

            <input type="file" name="img" id="upload-photo" />
        </div>

    </div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
