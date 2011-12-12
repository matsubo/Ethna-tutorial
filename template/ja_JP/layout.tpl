<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="{$config.url}css/ethna.css" type="text/css" />
<title>Tutorial</title>
</head>
<body>
<div id="header">
    <h1>Tutorial</h1>
</div>

<div id="message">
{if count($errors)}
   <ul>
  {foreach from=$errors item=error}
    <li>{$error}</li>
  {/foreach}
  </ul>
{/if}

</div>

<div id="main">
{$content}
</div>

<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-{$smarty.const.ETHNA_VERSION}.
</div>
</body>
</html>
