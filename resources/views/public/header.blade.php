<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ isset($title) ? $title : '网站' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">