<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css" media="screen">
		.aa{
			text-decoration:none;
		}
	</style>
</head>
<body>
	友情链接	
	<hr>
	    
                </div>
                <div>
                    @foreach($rs as $k=> $v)
                        <a class='aa' href="{{$v->flink}}" title="{{$v->descript}}">{{$v->fname}}</a>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                   @endforeach
                </div>
            </div>
        </div>	

</body>
</html>