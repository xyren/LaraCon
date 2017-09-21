
	@if( $fileExt == 'pdf') 
		<i class="fa fa-file-pdf-o fa-{{ $size}}" title="PDF"></i>
	@elseif( $fileExt == 'zip' || $fileExt == 'rar') 
		<i class="fa fa-file-zip-o fa-{{ $size}}" title="Archive: {{$fileExt}}"></i>
	@elseif( $fileExt == 'docx' || $fileExt == 'doc') 
		<i class="fa fa-file-word-o fa-{{ $size}}" title="Document: {{$fileExt}}"></i>
	@elseif( $fileExt == 'jpg' || $fileExt == 'jpeg' || $fileExt == 'png' || $fileExt == 'gif' || $fileExt == 'svg') 
		<i class="fa fa-file-image-o fa-{{ $size}}" title="Image: {{$fileExt}}"></i>
	@else
		<i class="fa fa-file fa-{{ $size}}" title="Mimetype: {{$fileExt}}"></i>
	@endif