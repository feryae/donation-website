<html>

<head>
    <style>
        html {
            height: 100%;
        }

        table {
            border: 1px solid black;
            width: 30%;
            margin-left: 40%;
            margin-top: 10%;
            border-radius: 5px;
            background-color: whitesmoke;
        }

        p {
            margin-top: 5%;
            border-bottom: 2px solid black;
            font-size: 30px;
        }

        input {
            padding: 10px;
            width: 80%;
            margin-top: 3%;
            margin-left: 7%;
            border-radius: 5px;
            border: 1px solid black;
        }

        button {
            margin-top: 3%;
            margin-bottom: 3%;
            margin-right: 6%;
            padding: 3%;
            float: right;
            border-radius: 5px;
            border: 1px solid black;
            background-color: white;
        }

        body {
            background: linear-gradient(rgb(87, 178, 208), white);
            width: 90%;
        }
    </style>
</head>


<body>
    <table>
        <form method="post" action="<?= base_url('C_login/validation');?>"></form>
        <th>
            <p>Sign Up</p>
        </th>
        <tr>
            <td>
                <input placeholder="full name" value="<?php echo set_value('fullname'); ?>">
                <span class="text-danger"><?php echo form_error('fullname'); ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="username" value="<?php echo set_value('username'); ?>">
                <span class="text-danger"><?php echo form_error('username'); ?></span>
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="password" value="<?php echo set_value('password'); ?>">
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </td>
        </tr>
        <td>
            <input placeholder="phone" value="<?php echo set_value('phone'); ?>">
                <span class="text-danger"><?php echo form_error('phone'); ?></span>
        </td>
        </tr>
        <tr>
            <td>
                <input placeholder="email" value="<?php echo set_value('email'); ?>">
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </td>
        </tr>

        <tr>
            <td>
                <div class="form-group">
                    <input placeholder="Register" type="submit" value="Register" class="btn btn-info">
                </div>
            </td>
        </tr>

        </form>
    </table>

</body>

</html>