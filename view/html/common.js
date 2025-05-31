export function isValidEmail(email) {
  const trimmedEmail = email.trim();

  if(trimmedEmail.length == 0)
    return "Email Can not be empty";

  if (trimmedEmail.length < 8 || trimmedEmail.length > 50)
    return "Email must be between 8 and 50 characters.";

  const atIndex = trimmedEmail.indexOf("@");
  const lastAtIndex = trimmedEmail.lastIndexOf("@");

  if (
    atIndex === -1 ||
    atIndex === 0 ||
    atIndex === trimmedEmail.length - 1 ||
    atIndex !== lastAtIndex
  ) {
    return "Please enter a valid email format (e.g., user@example.com).";
  }

  const domainPart = trimmedEmail.substring(atIndex + 1);
  const dotIndexInDomain = domainPart.indexOf(".");

  if (
    dotIndexInDomain === -1 ||
    dotIndexInDomain === 0 ||
    dotIndexInDomain === domainPart.length - 1
  ) {
    return "Please enter a valid email domain (e.g., example.com).";
  }

  if (domainPart.substring(dotIndexInDomain + 1).length < 2) {
    return "Email top-level domain must be at least 2 characters.";
  }

  return "";
}

export function isValidPassword(password) {
  let hasUpper   = false;
  let hasLower   = false;
  let hasNumber  = false;
  let hasSpecial = false;

  if(password.trim().length == 0)
    return "Password Can not be empty "
  const specialCharacters = "!@#$%^&*()_+-=[]{};':\"\\|,.<>/?~";

  for (let i = 0; i < password.length; i++) {
    const char = password[i];
    if (char >= "A" && char <= "Z") {
      hasUpper = true;
    } else if (char >= "a" && char <= "z") {
      hasLower = true;
    } else if (char >= "0" && char <= "9") {
      hasNumber = true;
    } else if (specialCharacters.includes(char)) {
      hasSpecial = true;
    }
  }

  if (!hasUpper) return "Password must contain at least one uppercase letter.";
  if (!hasLower) return "Password must contain at least one lowercase letter.";
  if (!hasNumber) return "Password must contain at least one number.";
  if (!hasSpecial)
    return "Password must contain at least one special character.";

  return "";
}

export function isValidUsername(username) {
  const trimmedUsername = username.trim();

  if(trimmedUsername.length == 0)
    return "Username can not be empty"

  if (trimmedUsername.length < 3 || trimmedUsername.length > 20) {
    return "Username must be between 3 and 20 characters.";
  }

  if (trimmedUsername.includes(" ")) {
    return "Username cannot contain spaces.";
  }

  const allowedChars =
    "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-";
  for (let i = 0; i < trimmedUsername.length; i++) {
    const char = trimmedUsername[i];
    if (!allowedChars.includes(char)) {
      return "Username can only contain letters, numbers, underscores (_), and hyphens (-).";
    }
  }

  if (trimmedUsername.startsWith("_") || trimmedUsername.startsWith("-")) {
    return "Username cannot start with an underscore or hyphen.";
  }
  if (trimmedUsername.endsWith("_") || trimmedUsername.endsWith("-")) {
    return "Username cannot end with an underscore or hyphen.";
  }

  if (trimmedUsername.includes("__") || trimmedUsername.includes("--")) {
    return "Username cannot have consecutive underscores or hyphens.";
  }

  return "";
}
