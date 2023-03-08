<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Progress Tracker</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <section>
      <h2>Search for a Student</h2>
      <form>
        <div>
          <label for="search">Search by Name:</label>
          <input type="text" id="search" name="search" required>
        </div>
        <button type="submit">Search</button>
      </form>
    </section>
    <section>
      <h2>Student Information</h2>
      <form>
        <div>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" readonly>
        </div>
        <div>
          <label for="id">ID:</label>
          <input type="text" id="id" name="id" readonly>
        </div>
        <div>
          <label for="program">Program:</label>
          <input type="text" id="program" name="program" readonly>
        </div>
        <div>
          <label for="advisor">Advisor:</label>
          <input type="text" id="advisor" name="advisor" readonly>
        </div>
        <button type="button" id="edit-btn">Edit</button>
        <button type="submit" id="save-btn" disabled>Save</button>
        <button type="button" id="cancel-btn" disabled>Cancel</button>
      </form>
    </section>
    <section>
      <h2>Course Progress</h2>
      <table id="course-progress-table">
        <thead>
          <tr>
            <th>Course</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr data-course-id="1">
            <td>Programming 101</td>
            <td>B+</td>
            <td>Completed</td>
            <td><button type="button" class="edit-course-btn">Edit</button></td>
          </tr>
          <tr data-course-id="2">
            <td>Database Management</td>
            <td>A-</td>
            <td>In Progress</td>
            <td><button type="button" class="edit-course-btn">Edit</button></td>
          </tr>
          <tr data-course-id="3">
            <td>Web Development</td>
            <td><input type="text" id="grade-webdev" name="grade-webdev"></td>
            <td><select id="status-webdev" name="status-webdev">
              <option value="not-started">Not Started</option>
              <option value="in-progress">In Progress</option>
              <option value="completed">Completed</option>
            </select></td>
            <td><button type="button" class="edit-course-btn">Edit</button></td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
  <script src="script.js"></script>
</body>
</html>