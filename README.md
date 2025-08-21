<p align="center">
  
  <h1>Location-Based Attendance System</h1>
</p>

Welcome to the **Location-Based Attendance System**!  
This project is an intelligent attendance solution that leverages geolocation to mark user attendance only when they are within one of four predefined sets of coordinates (locations).

---

## 📚 About

- **Purpose:** Ensure authentic attendance by verifying user presence at specific locations.
- **Key Feature:** Attendance can only be marked when the user's device is detected within any one of the authorized coordinate sets.
- **Audience:** Suitable for colleges, offices, field staff tracking, events, or any scenario requiring location-based verification.

---

## 🗂️ Repository Structure

```
attendance-system/
│
├── src
│   ├── AttendanceSystem.java
│   └── To be continued
│
├── README.md
```

---

## 🚀 Features

- **Geolocation Validation:** Only marks attendance if user is within the allowed coordinate sets.
- **Configurable Locations:** Four location sets are hardcoded or can be configured.
- **User Authentication:** Ensures only registered users can mark attendance.
- **Simple Interface:** Easy-to-use prompts for users to attempt marking attendance.
- **Attendance Logs:** Keeps track of successful attendance records.

---

## 🗺️ How It Works

1. **User Authentication:**  
   User logs in or identifies themselves.

2. **Location Check:**  
   The system fetches the user's current location (latitude, longitude).

3. **Verification:**  
   If the user's coordinates match any of the four authorized sets (within a small margin for GPS accuracy), attendance is marked.

4. **Record:**  
   The attendance is logged for that user.

---

## 📖 Example Coordinate Sets

| Location Name | Latitude | Longitude |
|---------------|----------|-----------|
| Location 1    | 12.9716  | 77.5946   |
| Location 2    | 13.0827  | 80.2707   |
| Location 3    | 19.0760  | 72.8777   |
| Location 4    | 28.7041  | 77.1025   |

*(Just a sample coordinates.)*

---

## 🏁 How to Run

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/attendance-system.git
    ```
2. **Navigate to the source directory:**
    ```bash
    cd attendance-system/src
    ```
3. **Compile and run:**
    ```bash
    javac AttendanceSystem.java
    java AttendanceSystem
    ```

---

## 🤝 Contributing

Contributions and improvements are welcome!  
- Fork the repo
- Create a feature branch
- Submit a pull request

---

## 📞 Contact

For questions, suggestions, or collaboration, open an issue or contact the repository developers - 
- bilubesto@gmail.com
- bharathjeyakkumars@gmail.com
- bhuvaneshwarts1@gmail.com
- barathishankarr@gmail.com

---

<p align="center"><b>Mark your attendance, not just your presence ! 📍</b></p>
