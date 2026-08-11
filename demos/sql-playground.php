<?php
// demos/sql-playground.php
$pageTitle = "Interactive SQL Coding Lab Demo | Infinity SoftHub";
$pageDescription = "Try our interactive browser-based SQL coding playground. We build custom SQL/Python coding labs, databases explorers, and auto-grading widgets for Moodle™ LMS.";
$pageKeywords = "SQL playground, browser SQL editor, Moodle coding lab, interactive learning tools, LMS database explorer, coding compiler widget";
$activePage = 'demos';

// Ensure base URL can find includes
require_once '../includes/header.php';
?>

<style>
    .demo-container {
        padding: 4rem 0;
        background: #0b1528;
        color: #f8fafc;
        min-height: calc(100vh - 100px);
    }
    .playground-wrapper {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }
    @media (max-width: 992px) {
        .playground-wrapper {
            grid-template-columns: 1fr;
        }
    }
    /* Sidebar Schema Explorer */
    .schema-sidebar {
        background: #152238;
        border-radius: 12px;
        padding: 1.5rem;
        border: 1px solid #1e2e4a;
    }
    .sidebar-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--accent-cyan);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .table-schema-item {
        margin-bottom: 1.25rem;
    }
    .table-name-badge {
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
        background: #1e2e4a;
        color: #60a5fa;
        padding: 0.25rem 0.5rem;
        border-radius: 4px;
        display: inline-block;
        margin-bottom: 0.5rem;
        cursor: pointer;
        transition: background 0.2s;
    }
    .table-name-badge:hover {
        background: #2563eb;
        color: #ffffff;
    }
    .column-list {
        list-style: none;
        padding-left: 0.5rem;
        font-size: 0.8rem;
        color: #94a3b8;
    }
    .column-list li {
        margin-bottom: 0.25rem;
        display: flex;
        justify-content: space-between;
    }
    .col-type {
        color: #64748b;
        font-style: italic;
    }

    /* IDE Workspace */
    .ide-workspace {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .editor-card {
        background: #152238;
        border-radius: 12px;
        border: 1px solid #1e2e4a;
        overflow: hidden;
    }
    .editor-header {
        background: #0f1a2c;
        padding: 0.75rem 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #1e2e4a;
    }
    .editor-title {
        font-size: 0.85rem;
        font-weight: 600;
        color: #94a3b8;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .editor-actions {
        display: flex;
        gap: 0.75rem;
    }
    .btn-editor {
        padding: 0.4rem 1rem;
        font-size: 0.8rem;
        border-radius: 6px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        transition: all 0.2s;
    }
    .btn-run {
        background: #10b981;
        color: #ffffff;
    }
    .btn-run:hover {
        background: #059669;
    }
    .btn-reset {
        background: #ef4444;
        color: #ffffff;
    }
    .btn-reset:hover {
        background: #dc2626;
    }
    .sql-textarea {
        width: 100%;
        height: 180px;
        background: #0b1528;
        color: #38bdf8;
        border: none;
        padding: 1.5rem;
        font-family: 'Courier New', monospace;
        font-size: 1rem;
        line-height: 1.5;
        resize: none;
        outline: none;
        box-sizing: border-box;
    }

    /* Result Panel */
    .result-card {
        background: #152238;
        border-radius: 12px;
        border: 1px solid #1e2e4a;
        padding: 1.5rem;
        min-height: 200px;
    }
    .result-header {
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #60a5fa;
    }
    .table-scroll {
        overflow-x: auto;
        width: 100%;
    }
    .result-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.9rem;
        text-align: left;
    }
    .result-table th {
        background: #1e2e4a;
        color: #60a5fa;
        padding: 0.75rem 1rem;
        font-weight: 600;
        border-bottom: 2px solid #2563eb;
    }
    .result-table td {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid #1e2e4a;
        color: #e2e8f0;
    }
    .result-table tr:hover {
        background: rgba(96, 165, 250, 0.05);
    }
    .empty-result {
        color: #64748b;
        text-align: center;
        padding: 3rem 0;
        font-style: italic;
    }
    .error-result {
        color: #f87171;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.2);
        border-radius: 6px;
        padding: 1rem;
        font-family: monospace;
    }
</style>

<div class="demo-container">
    <div class="container">
        <div class="anim-fade-up">
            <span class="badge badge-primary"><i class="fas fa-flask"></i> Interactive Showcase</span>
            <h1 class="mt-1rem">LMS SQL Coding <span class="gradient-text">Lab Sandbox</span></h1>
            <p class="lead" style="max-width: 800px; color:#94a3b8;">
                This sandbox demonstrates the interactive database coding environments we build and integrate inside e-learning courses (Moodle™ & LearnDash). Try executing SQL queries in the console below!
            </p>
        </div>

        <div class="playground-wrapper">
            <!-- Sidebar Schema Explorer -->
            <aside class="schema-sidebar anim-fade-right" data-aos="fade-right">
                <div class="sidebar-title">
                    <i class="fas fa-database"></i> Database Schema
                </div>
                <p style="font-size:0.8rem; color:#94a3b8; margin-bottom:1rem;">Click on a table name to query it.</p>

                <!-- Table 1 -->
                <div class="table-schema-item">
                    <div class="table-name-badge" onclick="loadTableQuery('students')">students</div>
                    <ul class="column-list">
                        <li><span>id</span><span class="col-type">INT</span></li>
                        <li><span>name</span><span class="col-type">VARCHAR</span></li>
                        <li><span>email</span><span class="col-type">VARCHAR</span></li>
                        <li><span>major</span><span class="col-type">VARCHAR</span></li>
                        <li><span>gpa</span><span class="col-type">DECIMAL</span></li>
                    </ul>
                </div>

                <!-- Table 2 -->
                <div class="table-schema-item">
                    <div class="table-name-badge" onclick="loadTableQuery('courses')">courses</div>
                    <ul class="column-list">
                        <li><span>course_id</span><span class="col-type">VARCHAR</span></li>
                        <li><span>title</span><span class="col-type">VARCHAR</span></li>
                        <li><span>credits</span><span class="col-type">INT</span></li>
                    </ul>
                </div>

                <!-- Table 3 -->
                <div class="table-schema-item">
                    <div class="table-name-badge" onclick="loadTableQuery('grades')">grades</div>
                    <ul class="column-list">
                        <li><span>student_id</span><span class="col-type">INT</span></li>
                        <li><span>course_id</span><span class="col-type">VARCHAR</span></li>
                        <li><span>grade</span><span class="col-type">VARCHAR</span></li>
                    </ul>
                </div>
            </aside>

            <!-- IDE Workspace -->
            <main class="ide-workspace anim-fade-left" data-aos="fade-left">
                <!-- Editor -->
                <div class="editor-card">
                    <div class="editor-header">
                        <div class="editor-title">
                            <i class="fas fa-terminal"></i> SQL Query Editor
                        </div>
                        <div class="editor-actions">
                            <button class="btn-editor btn-reset" onclick="resetEditor()">
                                <i class="fas fa-sync"></i> Reset
                            </button>
                            <button class="btn-editor btn-run" onclick="runQuery()">
                                <i class="fas fa-play"></i> Run Query
                            </button>
                        </div>
                    </div>
                    <textarea id="sqlTextarea" class="sql-textarea" spellcheck="false">SELECT * FROM students WHERE gpa > 3.5;</textarea>
                </div>

                <!-- Results -->
                <div class="result-card">
                    <div class="result-header">
                        <i class="fas fa-table"></i> Execution Results
                    </div>
                    <div id="resultOutput" class="table-scroll">
                        <!-- Table will render here -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<script>
    // In-memory Database
    const DB = {
        students: [
            { id: 1, name: 'Alice Johnson', email: 'alice@university.edu', major: 'Computer Science', gpa: 3.8 },
            { id: 2, name: 'Bob Smith', email: 'bob@university.edu', major: 'Data Science', gpa: 3.5 },
            { id: 3, name: 'Charlie Brown', email: 'charlie@university.edu', major: 'Software Engineering', gpa: 3.9 },
            { id: 4, name: 'David Lee', email: 'david@university.edu', major: 'Computer Science', gpa: 3.2 },
            { id: 5, name: 'Emma Watson', email: 'emma@university.edu', major: 'Mathematics', gpa: 3.7 }
        ],
        courses: [
            { course_id: 'CS101', title: 'Introduction to Computer Science', credits: 4 },
            { course_id: 'DS201', title: 'Data Structures and Algorithms', credits: 4 },
            { course_id: 'DB301', title: 'Database Management Systems', credits: 3 },
            { course_id: 'AI401', title: 'Introduction to Artificial Intelligence', credits: 4 }
        ],
        grades: [
            { student_id: 1, course_id: 'CS101', grade: 'A' },
            { student_id: 1, course_id: 'DB301', grade: 'A-' },
            { student_id: 2, course_id: 'DS201', grade: 'B+' },
            { student_id: 3, course_id: 'CS101', grade: 'A' },
            { student_id: 3, course_id: 'AI401', grade: 'A' },
            { student_id: 4, course_id: 'DB301', grade: 'B' }
        ]
    };

    function loadTableQuery(table) {
        document.getElementById('sqlTextarea').value = `SELECT * FROM ${table};`;
        runQuery();
    }

    function resetEditor() {
        document.getElementById('sqlTextarea').value = 'SELECT * FROM students WHERE gpa > 3.5;';
        runQuery();
    }

    function runQuery() {
        const query = document.getElementById('sqlTextarea').value;
        const outputDiv = document.getElementById('resultOutput');
        
        try {
            const results = executeSQL(query);
            renderTable(results, outputDiv);
        } catch (error) {
            outputDiv.innerHTML = `<div class="error-result"><i class="fas fa-exclamation-triangle"></i> ${error.message}</div>`;
        }
    }

    function executeSQL(query) {
        query = query.trim().replace(/;$/, '').replace(/\s+/g, ' ');
        const selectMatch = query.match(/^SELECT\s+(.*?)\s+FROM\s+(\w+)(?:\s+WHERE\s+(.*?))?(?:\s+LIMIT\s+(\d+))?$/i);
        if (!selectMatch) {
            throw new Error("Syntax Error: Only standard SELECT queries are supported in this demo sandbox (e.g. SELECT * FROM students WHERE gpa > 3.5)");
        }
        
        const colsStr = selectMatch[1].trim();
        const tableName = selectMatch[2].trim().toLowerCase();
        const whereStr = selectMatch[3] ? selectMatch[3].trim() : null;
        const limitStr = selectMatch[4] ? selectMatch[4].trim() : null;

        if (!DB[tableName]) {
            throw new Error(`Table "${tableName}" not found. Available tables: students, courses, grades`);
        }

        let data = [...DB[tableName]];

        // Handle simple WHERE clause filter
        if (whereStr) {
            const whereMatch = whereStr.match(/^(\w+)\s*(=|>|<)\s*(.*?)$/);
            if (!whereMatch) {
                throw new Error("WHERE Error: Supported filters are '=', '>', and '<' (e.g. gpa > 3.5)");
            }
            
            const field = whereMatch[1].trim();
            const operator = whereMatch[2].trim();
            let value = whereMatch[3].trim().replace(/^['"]|['"]$/g, ''); // strip quotes
            
            data = data.filter(row => {
                let rowVal = row[field];
                if (rowVal === undefined) return false;
                
                if (!isNaN(rowVal) && !isNaN(value)) {
                    rowVal = Number(rowVal);
                    value = Number(value);
                } else {
                    rowVal = String(rowVal).toLowerCase();
                    value = String(value).toLowerCase();
                }
                
                if (operator === '=') return rowVal == value;
                if (operator === '>') return rowVal > value;
                if (operator === '<') return rowVal < value;
                return false;
            });
        }

        // Apply Limit
        if (limitStr) {
            const limit = parseInt(limitStr);
            data = data.slice(0, limit);
        }

        // Project columns
        let columns = [];
        if (colsStr === '*') {
            columns = Object.keys(DB[tableName][0]);
        } else {
            columns = colsStr.split(',').map(c => c.trim());
        }

        // Build result rows
        const rows = data.map(row => {
            const newRow = {};
            columns.forEach(col => {
                newRow[col] = row[col] !== undefined ? row[col] : null;
            });
            return newRow;
        });

        return { columns, rows };
    }

    function renderTable(data, container) {
        if (data.rows.length === 0) {
            container.innerHTML = '<div class="empty-result">Query returned 0 rows.</div>';
            return;
        }

        let html = '<table class="result-table"><thead><tr>';
        data.columns.forEach(col => {
            html += `<th>${col}</th>`;
        });
        html += '</tr></thead><tbody>';

        data.rows.forEach(row => {
            html += '<tr>';
            data.columns.forEach(col => {
                html += `<td>${row[col] !== null ? row[col] : 'NULL'}</td>`;
            });
            html += '</tr>';
        });

        html += '</tbody></table>';
        container.innerHTML = html;
    }

    // Run query on load
    document.addEventListener('DOMContentLoaded', runQuery);
</script>

<?php
require_once '../includes/footer.php';
?>
