@echo off
echo ====================================================
echo  Infinity SoftHub - SEO Audit & Sitemap Generator
echo ====================================================
echo.

:: Navigate to script directory
cd /d "%~dp0"

:: Step 1: Install dependencies if missing
echo [1/3] Checking Python libraries...
pip install -r seo-toolkit\requirements.txt --user >nul 2>&1
if %errorlevel% neq 0 (
    echo Warning: Automatically checking dependencies failed. Trying normal install...
    pip install requests beautifulsoup4 --user
) else (
    echo Dependencies verified successfully.
)
echo.

:: Step 2: Run local SEO audit and sitemap compilation
echo [2/3] Auditing website pages & compiling sitemap...
python seo-toolkit\audit.py --dir "%~dp0." --out-sitemap "%~dp0sitemap.xml" --out-report "%~dp0seo_report.md"

if %errorlevel% neq 0 (
    echo.
    echo Error: Failed to execute Python audit. Please verify Python is installed on your PATH.
) else (
    echo.
    echo [3/3] Setup Completed successfully!
    echo ----------------------------------------------------
    echo  Files Created:
    echo   - sitemap.xml  (Ready for Google Search Console)
    echo   - seo_report.md (Check this file for content warnings)
    echo ----------------------------------------------------
)

echo.
pause
