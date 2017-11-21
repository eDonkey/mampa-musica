<html>
  <head>
    <title>Demo 1 : Convert All Textareas</title>
    <script type="text/javascript" src="../js/nicedit/nicEdit.js"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
  </head>
  <body>
    <div id="menu"></div>
    <br />
    <div id="sample">


      <h4>Third Textarea</h4>
      <textarea name="area3" style="width: 300px; height: 100px;">
	HTML <b>content</b> <i>default</i> in textarea
      </textarea>
    </div>
  </body>
</html>
