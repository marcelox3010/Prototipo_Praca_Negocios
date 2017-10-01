<html>

	<head>
		<title>teste jquery</title>
		<script src="js/jquery/jquery.js"></script>
		<link rel="stylesheet" href="js/jtree/themes/default/style.min.css" />
		<script src="js/jtree/jstree.min.js"></script>
	</head>

	<body>
		<div id="demo1">
		    <ul >
		        <li><a>Categories</a>
		            <ul>
		                <li><a>Category 1</a>
		                    <ul>
		                        <li><a>Product A</a></li>
		                        <li><a>Product B</a></li>
		                        <li><a>Product C</a></li>
		                    </ul>
		                </li>
		                <li><a>Category 2</a>
		                    <ul>
		                        <li><a>Product D</a></li>
		                    </ul>
		                </li>
		            </ul>
		        </li>
		    </ul>
		</div>
	
	</body>
	
</html>

<script>

	$(function () { $('#demo1').jstree(); });

</script>