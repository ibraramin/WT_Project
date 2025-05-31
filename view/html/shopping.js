document.addEventListener("DOMContentLoaded", () => {
  const itemNameInput = document.getElementById("item-name-input");
  const itemQtyInput = document.getElementById("item-qty-input");
  const addItemButton = document.getElementById("add-item-button");
  const groceryListContainer = document.getElementById(
    "grocery-list-container"
  );
  const clearPurchasedButton = document.getElementById(
    "clear-purchased-button"
  );

  let groceryList = [];
  let nextItemId = 0;

  function renderList() {
    groceryListContainer.innerHTML = "";

    if (groceryList.length === 0) {
      groceryListContainer.innerHTML = "<li>Your list is empty!</li>";
      return;
    }

    groceryList.forEach((item) => {
      const listItem = document.createElement("li");

      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.checked = item.purchased;
      checkbox.dataset.itemId = item.id;
      checkbox.addEventListener("change", () => {
        toggleItemPurchased(item.id);
      });

      const itemText = document.createElement("span");
      itemText.textContent = `${item.name} (${item.qty})`;
      if (item.purchased) {
        itemText.classList.add("purchased");
      }

      listItem.appendChild(checkbox);
      listItem.appendChild(itemText);
      groceryListContainer.appendChild(listItem);
    });
  }

  function handleAddItem() {
    const name = itemNameInput.value.trim();
    const qty = itemQtyInput.value.trim();

    if (name === "") {
      alert("Please enter an item name.");
      return;
    }

    const newItem = {
      id: nextItemId++,
      name: name,
      qty: qty || "1",
      purchased: false,
    };

    groceryList.push(newItem);

    itemNameInput.value = "";
    itemQtyInput.value = "";

    renderList();
  }

  function toggleItemPurchased(itemIdToToggle) {
    const item = groceryList.find((item) => item.id === itemIdToToggle);

    item.purchased = !item.purchased;

    renderList();
  }

  function handleClearPurchased() {
    groceryList = groceryList.filter((item) => !item.purchased);

    renderList();
  }

  addItemButton.addEventListener("click", handleAddItem);

  clearPurchasedButton.addEventListener("click", handleClearPurchased);

  renderList();
});
