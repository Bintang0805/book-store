module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        colors : {
            "main-800" : "#4da6ff",
            "main-700" : "#66b3ff",
            "main-600" : "#80bfff",
            "main-500" : "#84c1ff",
            "main-400" : "#add6ff",
            "main-300" : "#d6eaff",
            "main-200" : "#eaf4ff",
            "main-100" : "#f8fbff",
        },
        fontFamily : {
            montserrat: ["montserrat", "sans-serif"],
            poppins: ["poppins", "sans-serif"]
        },
    },
  },
  plugins: [],
}
