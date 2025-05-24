const themeToggle = document.getElementById("theme-toggle");
const themeStylesheet = document.getElementById("theme-stylesheet");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

const lightThemePath = "../css/landing-page-light.css";
const darkThemePath = "../css/landing-page-dark.css";

function applyTheme(theme) {
  const isDark = (theme === "dark");
  themeStylesheet.setAttribute("href", isDark ? darkThemePath : lightThemePath);
  if (themeToggle) {
    themeToggle.checked = isDark;
  }
}

const storedTheme = localStorage.getItem("theme");
const initialTheme =
  storedTheme || (prefersDarkScheme.matches ? "dark" : "light");
applyTheme(initialTheme);

if (themeToggle) {
  themeToggle.addEventListener("change", function () {
    const newTheme = this.checked ? "dark" : "light";
    applyTheme(newTheme);
    localStorage.setItem("theme", newTheme);
    localStorage.setItem("theme-manual-override", "true");
  });
}

prefersDarkScheme.addEventListener("change", (e) => {
  if (!localStorage.getItem("theme-manual-override")) {
    const newTheme = e.matches ? "dark" : "light";
    applyTheme(newTheme);
    localStorage.setItem("theme", newTheme);
  }
});
