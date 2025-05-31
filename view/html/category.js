document.addEventListener("DOMContentLoaded", function () {
  const saveFilterBtn = document.getElementById("save-filter-btn");
  const filterNameInput = document.getElementById("filter-name-save");
  const recipeFilterForm = document.getElementById("recipeFilterForm");
  const savedFiltersList = document.getElementById("saved-filters-list");

  const SAVED_FILTERS_KEY = "recipeezz_saved_filters";

  function getStoredFilters() {
    const filtersJSON = localStorage.getItem(SAVED_FILTERS_KEY);
    return filtersJSON ? JSON.parse(filtersJSON) : [];
  }

  function storeFilters(filters) {
    localStorage.setItem(SAVED_FILTERS_KEY, JSON.stringify(filters));
  }

  function getCurrentFilterSelection() {
    const getCheckedValues = (name) =>
      Array.from(
        recipeFilterForm.querySelectorAll(`input[name="${name}[]"]:checked`)
      ).map((cb) => cb.value);

    return {
      cuisines: getCheckedValues("cuisine"),
      meals: getCheckedValues("meal"),
      diets: getCheckedValues("diet"),
    };
  }

  function renderSavedFilters() {
    const savedFilters = getStoredFilters();
    savedFiltersList.innerHTML = "";

    if (savedFilters.length === 0) {
      savedFiltersList.innerHTML = "<li>No filters saved yet.</li>";
      return;
    }

    savedFilters.forEach((filter, index) => {
      const li = document.createElement("li");
      const { cuisines, meals, diets } = filter.filters;

      let detailsText = "";
      if (cuisines && cuisines.length > 0) {
        detailsText += `Cuisines: ${cuisines.join(", ")}; `;
      }
      if (meals && meals.length > 0) {
        detailsText += `Meals: ${meals.join(", ")}; `;
      }
      if (diets && diets.length > 0) {
        detailsText += `Diets: ${diets.join(", ")}; `;
      }

      if (detailsText.endsWith("; ")) {
        detailsText = detailsText.substring(0, detailsText.length - 2);
      }
      if (!detailsText) {
        detailsText = "No specific criteria";
      }

      li.innerHTML = `
                <span>
                    <strong>${filter.name}</strong> 
                    <div class="filter-details">${detailsText}</div>
                </span>
                <div>
                    <button class="apply-saved-filter-btn" data-index="${index}" title="Apply this filter">Apply</button>
                    <button class="delete-saved-filter-btn" data-index="${index}" title="Delete this filter"><i class="fa fa-trash"></i></button>
                </div>
            `;
      savedFiltersList.appendChild(li);
    });
  }

  function applyFilterToForm(filterData) {
    recipeFilterForm
      .querySelectorAll('input[type="checkbox"]')
      .forEach((cb) => (cb.checked = false));

    const setCheckboxes = (groupName, valuesToSelect) => {
      if (valuesToSelect && valuesToSelect.length > 0) {
        valuesToSelect.forEach((value) => {
          const cb = recipeFilterForm.querySelector(
            `input[name="${groupName}[]"][value="${value}"]`
          );
          if (cb) cb.checked = true;
        });
      }
    };

    setCheckboxes("cuisine", filterData.cuisines);
    setCheckboxes("meal", filterData.meals);
    setCheckboxes("diet", filterData.diets);
  }

  function handleSaveFilter() {
    const filterName = filterNameInput.value.trim();
    if (!filterName) {
      alert("Please enter a name for your filter combination.");
      filterNameInput.focus();
      return;
    }

    const currentFiltersData = getCurrentFilterSelection();
    if (
      currentFiltersData.cuisines.length === 0 &&
      currentFiltersData.meals.length === 0 &&
      currentFiltersData.diets.length === 0
    ) {
      alert("Please select at least one filter criterion to save.");
      return;
    }

    let savedFilters = getStoredFilters();
    const newFilter = { name: filterName, filters: currentFiltersData };

    let existingFilterIndex = -1;
    for (let i = 0; i < savedFilters.length; i++) {
      if (savedFilters[i].name.toLowerCase() === filterName.toLowerCase()) {
        existingFilterIndex = i;
        break;
      }
    }

    if (existingFilterIndex !== -1) {
      if (
        confirm(
          `A filter named "${filterName}" already exists. Do you want to overwrite it?`
        )
      ) {
        savedFilters[existingFilterIndex] = newFilter;
      } else {
        return;
      }
    } else {
      savedFilters.push(newFilter);
    }

    storeFilters(savedFilters);
    alert(`Filter "${filterName}" saved!`);
    filterNameInput.value = "";
    renderSavedFilters();
  }

  savedFiltersList.addEventListener("click", function (event) {
    const targetButton = event.target.closest("button");
    if (!targetButton) return;

    const filterIndex = parseInt(targetButton.dataset.index, 10);

    if (isNaN(filterIndex)) return;

    let currentSavedFilters = getStoredFilters();

    if (targetButton.classList.contains("apply-saved-filter-btn")) {
      if (filterIndex >= 0 && filterIndex < currentSavedFilters.length) {
        applyFilterToForm(currentSavedFilters[filterIndex].filters);
        alert(
          `Filter "${currentSavedFilters[filterIndex].name}" applied. You can now search with these criteria.`
        );
      }
    } else if (targetButton.classList.contains("delete-saved-filter-btn")) {
      if (filterIndex >= 0 && filterIndex < currentSavedFilters.length) {
        if (
          confirm(
            `Are you sure you want to delete the filter "${currentSavedFilters[filterIndex].name}"?`
          )
        ) {
          currentSavedFilters.splice(filterIndex, 1);
          storeFilters(currentSavedFilters);
          renderSavedFilters();
        }
      }
    }
  });
  saveFilterBtn.addEventListener("click", handleSaveFilter);
  renderSavedFilters();
});
