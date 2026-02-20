# Pet Adoption Center

A web-based platform connecting pet adopters with pet providers. Built 3 years ago using native PHP and MySQL, this application facilitates the adoption process and helps pets find loving homes.

## 🚀 Features

*   **User Roles**:
    *   **Provider**: Can list pets for adoption and manage their listings.
    *   **Adopter**: Can browse available pets, request adoption, and view adoption history.
*   **Pet Management**: comprehensive details including breed, age, and type.
*   **Review System**: Users can leave reviews for providers/adopters.
*   **Adoption History**: Tracks past adoptions and activities.

## 🛠️ Technology Stack

*   **Frontend**: HTML5, CSS3, [Bulma CSS Framework](https://bulma.io/)
*   **Backend**: Native PHP (Version ~8.0)
*   **Database**: MySQL (MariaDB)

## ⚙️ Installation & Setup

This project uses raw PHP and requires a local server environment like XAMPP or WAMP.

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/MehediShishir/Pet-Adoption-Center.git
    ```

2.  **Move to Server Directory**
    *   Copy the project folder to your server's root directory (e.g., `C:\xampp\htdocs\`).
    *   **Important**: The code expects the folder name to be `PET_ADOPTION` or similar due to hardcoded paths. You may need to adjust folder names or the code paths in files like `conn.php` and redirect headers.

3.  **Database Setup**
    *   Open phpMyAdmin (usually `http://localhost/phpmyadmin`).
    *   Create a new database named `spets`.
    *   Import the `spets.sql` file located in the root directory.

4.  **Configuration**
    *   Check `pet_adoption/connection/conn.php` to ensure database credentials match your local setup.
    *   Default XAMPP settings (User: `root`, Password: ``) are currently configured.

5.  **Run the Application**
    *   Start Apache and MySQL in XAMPP control panel.
    *   Navigate to `http://localhost/YourFolderName/pet_adoption/pet_page/homepage.php` in your browser.

## 📂 Project Structure

*   `pet_adoption/` - Main application source code
    *   `connection/` - Database connection scripts
    *   `login_and_signup/` - Authentication pages
    *   `pet_page/` - Main landing and listing pages
    *   `backend*/` - PHP logic handlers for various authorized actions
*   `spets.sql` - Database schema and initial data dump

## 📝 License

This project is open source and available under the [MIT License](LICENSE).
