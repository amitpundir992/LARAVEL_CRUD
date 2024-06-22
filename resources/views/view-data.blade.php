<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <a href="{{url('/form')}}" style="color: white; background-color:aqua; padding:10px;">Add</a>
            </tr>
            <tr>
                <th>Student_id</th>
                <th>Student_name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date_of_joining</th>
                <th>Gender</th>
            </tr>
            <tbody>
                @foreach($student as $key => $val)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$val['name']}}</td>
                    <td>{{$val['mobile']}}</td>
                    <td>{{$val['email']}}</td>
                    <td>{{$val['address']}}</td>
                    <td>{{$val['doj']}}</td>
                    <td>{{$val['gender']}}</td>
                    <td>
                <a href="{{url('/update',['id'=>$val['student_id']])}}" style="color: white; background-color:green; padding:5px;">Update</a>
                <a href="{{url('/delete',['id'=>$val['student_id']])}}" style="color: white; background-color:red; padding:5px;">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>