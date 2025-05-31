document.addEventListener("DOMContentLoaded", () => {
  const fromValueInput = document.getElementById("from-value");
  const fromUnitSelect = document.getElementById("from-unit");
  const toValueOutput = document.getElementById("to-value");
  const toUnitSelect = document.getElementById("to-unit");

  const conversionFactors = {
    volume: {
      ml: 1,
      l: 1000,
      floz: 29.5735,
      cup: 236.588,
      pint: 473.176,
      quart: 946.353,
      gallon: 3785.41,
      tbsp: 14.7868,
      tsp: 4.92892,
    },
    weight: {
      g: 1,
      kg: 1000,
      oz: 28.3495,
      lb: 453.592,
    },
  };

  function getUnitCategory(unit) {
    if (conversionFactors.volume[unit]) return "volume";
    if (conversionFactors.weight[unit]) return "weight";
  }

  function convertUnits() {
    const fromValue = parseFloat(fromValueInput.value);
    const fromUnit = fromUnitSelect.value;
    const toUnit = toUnitSelect.value;

    const fromCategory = getUnitCategory(fromUnit);

    let valueInBaseUnit;
    let result;

    if (fromCategory === "volume") {
      valueInBaseUnit = fromValue * conversionFactors.volume[fromUnit];
      result = valueInBaseUnit / conversionFactors.volume[toUnit];
    } else {
      valueInBaseUnit = fromValue * conversionFactors.weight[fromUnit];
      result = valueInBaseUnit / conversionFactors.weight[toUnit];
    }

    toValueOutput.value = result.toFixed(2);
  }

  [fromValueInput, fromUnitSelect, toUnitSelect].forEach((el) => {
    el.addEventListener("input", convertUnits);
    el.addEventListener("change", convertUnits);
  });
  convertUnits();

  const originalServingsInput = document.getElementById("original-servings");
  const desiredServingsInput = document.getElementById("desired-servings");
  const ingredientTableBody = document.querySelector(".ingredient-table tbody");

  function formatAdjustedQuantity(num) {
    return num.toFixed(1);
  }

  function adjustServings() {
    const originalServings = parseFloat(originalServingsInput.value);
    const desiredServings = parseFloat(desiredServingsInput.value);

    const factor = desiredServings / originalServings;

    ingredientTableBody.querySelectorAll("tr").forEach((row) => {
      const quantityCell = row.querySelector(".original-quantity-val");
      const unitCell = row.querySelector(".unit-val");
      const adjustedDisplayCell = row.querySelector(
        ".adjusted-quantity-display"
      );

      const originalQuantityText = quantityCell.textContent;
      const originalQuantity = parseFloat(originalQuantityText);
      const unitText = unitCell.textContent;

      let adjustedQuantityNum = originalQuantity * factor;

      adjustedDisplayCell.textContent =
        formatAdjustedQuantity(adjustedQuantityNum) + " " + unitText;
    });
  }

  [originalServingsInput, desiredServingsInput].forEach((el) => {
    el.addEventListener("input", adjustServings);
    el.addEventListener("change", adjustServings);
  });
  adjustServings();
});
