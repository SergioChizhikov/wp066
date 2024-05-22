module.exports = {
	proxy: "localhost:10029/",
	notify: false,
	files: ["./css/*.min.css", "./js/*.min.js", "./**/*.php"],
	reloadDelay: 5000,
};
