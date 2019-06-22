<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle ?? 'Gam Taxi' ?></title>
    
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            /* padding: 0px 20px  */
            flex-direction: column;
            justify-content: space-between;
            display: flex; 
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            min-height: 100vh;
            background: white;
            color: rgba(10, 10, 10, 0.8);
           
            /* align-items: center; */
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 20px 12px;
            background-color: yellow;
            margin-bottom: 55px;
            box-shadow: 0px 0px 4px 3px grey;
            
        }
        table {
            background: white;
            margin-top: 10px;
            border-collapse: collapse;
            border: 1px solid grey;
            /* box-shadow: 4px 4px  4px 0px grey, 0px -0.1px 0px 0.7px grey; */
            border-radius: 10px;
            min-width: 60%;
        }
        th, td {
            padding: 20px 25px;
            text-align: center;
            border-bottom: 1px solid grey;
        }
        tr:last-of-type td{
            border-bottom: none;
        }
       
        button {
            border: none;
            background: whitesmoke;
            padding: 8px 13px;
        }
        .search-task-form {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        input[type='search'] {
            padding: 10px 10px;
            border: none;
            background: ghostwhite;
            width: 50%;
            outline: none;
        }
        input[type='search'] + button {
            padding: 10px 25px;
            background: ghostwhite;
            color: green;
            text-transform: capitalize;
            font-weight: bold;
        }
        .primary {
            /* background: green; */
            background: royalblue;
            color: whitesmoke;
        }
        .warning{
            background: rgba(150, 150, 150, 0.9);
            color: whitesmoke;
        }
        .rounded {
            border-radius: 4px;
        }
        button:hover {
            cursor: pointer;
        }
        h1 {
            color: white;
            font-size: 1.3rem;
        }
        ul {
            display: flex;    
            width: 100%;
            justify-content: end;
        }
        ul > li {
            list-style: none;
        }
        ul > li > a::after {
            content: "";
            position: absolute;
            top: 18px;
            left: 0;
            width: 0;
            height: 3px;
            transition: all 0.6s ease 0.001s;
        }
        ul > li  > a {
            position: relative;
            font-weight: 600;
            color: green;
            text-decoration: none;
            margin-right: 15px;
            
            /* border-top: 2px solid white; */
        }
        ul > li  > a:hover:after {
            background: green;
            width: 100%;
        }
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgb(246,247,250);
            /* background: #ffdee6; */
            padding: 30px;
           
        }
        footer {
            text-align: center;
            color: white;
            padding: 60px 30px;
            background:green;
        }
        /* ul > li  > a:hover:after {
            background: yellow;
            width: 70%;
        } */
        ul > li:last-of-type > a:hover:after {
            background: none;
        }
        div.has-error {
            margin-top: 5px;
            padding: 20px;
            background: red;
            min-width: 60%;
            text-align: center;
            border: none;
            margin-bottom: 20px;
        }
        div.has-success {
            margin-top: 5px;
            margin-bottom: 20px;
            padding: 20px;
            background: green;
            min-width: 60%;
            text-align: center;
            border: none;
        }
    </style>
</head>