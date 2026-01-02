<form action="">
    <h2>Create a New Laravel</h2>

    <label for="name">Laravel Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="skill">Laravel Skill(0-100):</label>
    <input type="number" id="skill" name="skill" required>

    <label for="bio">Biography:</label>
    <textarea name="bio" id="bio" rows="5" required></textarea>

    <label for="dojo_id">Dojo:</label>
    <select name="dojo_id" id="dojo_id" required>
        <option value="" disabled selected>Select a dojo</option>
    </select>
    <button type="submit" class="btn mt-4">Create Laravel</button>
</form>