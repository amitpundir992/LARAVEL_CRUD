<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration-form</title>
</head>
<body>
    <h1>Student-Registration Form</h1>
    <form action="{{url(!empty($student->student_id) && $student->student_id ? '/editupdate/'.$student->student_id : '/register')}}" method="post">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" value="{{old('name',$student->name ?? '')}}"><br>
        <span style="color:red;">@error('name') {{$message}}  @enderror</span><br>

        <label>Mobile</label><br>
        <input type="text" name="mobile" value="{{old('mobile',$student->mobile ?? '')}}"><br>
        <span style="color:red;">@error('mobile') {{$message}}  @enderror</span><br>


        <label>Email</label><br>
        <input type="email" name="email" value="{{old('email',$student->email ?? '')}}"><br>
        <span style="color:red;">@error('email') {{$message}}  @enderror</span><br>


        <label>Address</label><br>
        <textarea name="address">{{old('address',$student->address ?? '')}}</textarea><br>
        <span style="color:red;">@error('address') {{$message}}  @enderror</span><br>


        <label>Date of Joining</label><br>
        <input type="date" name="doj" value="{{old('doj',$student->doj ?? '')}}"><br>
        <span style="color:red;">@error('doj') {{$message}}  @enderror</span><br>


        <label>Gender</label><br>
        <input type="radio" name="gender" value="M" {{!empty($student->gender) && $student->gender=="M" ? 'checked' : ''}}>Male
        <input type="radio" name="gender" value="F"  {{!empty($student->gender) && $student->gender=="F" ? 'checked' : ''}}>Female
        <input type="radio" name="gender" value="o"  {{!empty($student->gender) && $student->gender=="O" ? 'checked' : ''}}>Other <br>
        <span style="color:red;">@error('gender') {{$message}}  @enderror</span><br>


        <label>Password</label><br>
        <input type="password" name="studpassword" value="{{old('studpassword',$student->studpassword ?? '')}}"><br>
        <span style="color:red;">@error('studpassword') {{$message}}  @enderror</span><br>

        <input type="submit" name="register" value="submit">


    </form>
</body>
</html>