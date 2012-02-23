<html>
<head>
    <title>{$title}</title>
</head>
<body>
    {$body}

{foreach from=$test item=foo}
    <li>{$foo}</li>
{/foreach}
</body>
</html>