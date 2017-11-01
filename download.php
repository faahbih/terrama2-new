<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

   <?php
/*
   A File Download Counter
   Version 1.1
   September 4, 2012

   (Version 1.0 published May 23, 2008

   Will Bontrager Software, LLC
   https://www.willmaster.com/
   Copyright 2008 Bontrager Connection, LLC
   Copyright 2012 Will Bontrager Software, LLC

   This software is provided "AS IS," without 
   any warranty of any kind, without even any 
   implied warranty such as merchantability 
   or fitness for a particular purpose.
   Will Bontrager Software, LLC grants 
   you a royalty free license to use or 
   modify this software provided this 
   notice appears on all copies. 
*/
////////////////////////////////
// Customizations.

// The log file must be in a subdirectory. The subdirectory 
//   might need 777 permissions.

   $LocationOfLogFile = "/subdirectory/filename.txt";

// Specify the URL of the downloadable file.

   $URLofDownloadableFile = "/file.zip";

// End of customizations.
////////////////////////////////

   $LocationOfLogFile = $_SERVER['DOCUMENT_ROOT'].$LocationOfLogFile;
   $filehandle = fopen($LocationOfLogFile,'a');
   if($filehandle)
   {
      $line = date('r')."\t".$_SERVER['REMOTE_ADDR']."\t$URLofDownloadableFile\t".$_SERVER['HTTP_USER_AGENT']."\n";
      fwrite($filehandle,$line);
   }
   fclose($filehandle);
   ?>

   <meta http-equiv="refresh" content="0; url=<?php echo($URLofDownloadableFile) ?>">

   <script type="text/javascript"><!--
   window.location = "<?php echo($URLofDownloadableFile) ?>";
//-->
</script>

</head>
<body>

   <p>
      If download does not start presently, 
      <a href="<?php echo($URLofDownloadableFile) ?>">
         click here.
      </a>
   </p>

</div>
</body>
</html>

