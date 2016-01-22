MathJax.Hub.Queue(function () {
	var mathCls = document.getElementsByClassName("MathJax_Display");
	for (var i = 0; i < mathCls.length; ++i) {
	    var mathItem = mathCls[i];
		var oldHeight = mathItem.offsetHeight;
		var newHeight = (oldHeight % 30 == 0 ? oldHeight : (parseInt(oldHeight / 30) + 1) * 30);
		mathItem.style.height = newHeight + "px";
	}
	MathJax.Hub.Queue(["Rerender", MathJax.Hub, mathCls]);
});