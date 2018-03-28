<h1>后台用户表</h1>
<table id="adminuser">
    <th>
        用户id
    </th>
    <th>
        用户名
    </th>
    <th>
        用户密码
    </th>
    <?php
    foreach($res as $key => $value)
        {
           echo '<tr>';
            foreach($value as  $v)
                {
                    echo '<td>'.$v.'</td>';
                }
            echo '</tr>';

        }
    ?>
    {{--@foreach({{$res}} as $value)--}}
        {{--echo '<tr>'.$value.'</tr>';--}}
    {{--@endforeach--}}
</table>
