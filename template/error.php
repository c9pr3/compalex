<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>COMPARE DATABASE</title>
    <script src="/public/js/jquery.min.js"></script>
    <script src="/public/js/functional.js"></script>
    <style type="text/css" media="all">
        @import url("/public/css/style.css");
    </style>
</head>

<body>
<div class="modal-background" onclick="Data.hideTableData(); return false;">
    <div class="modal">
        <iframe src="http://compare/index.php?action=rows&baseName=avalon&tableName=ScriptList" frameborder="0" style="width: 100%; height: 100%;"></iframe>
    </div>
</div>

<div class="compare-database-block">
    <h1>Compare Database</h1>
    <h2 style="color: #820000;">ERROR:<br /> <div style="border-top: 1px solid red;border-bottom: 1px solid red; padding: 20px;"><?php echo $e->getMessage(); ?></div></h2>

</div>
</body>