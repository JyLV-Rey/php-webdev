#!/bin/bash

RESOURCES_DIR="./resources"

# Check if entr is installed
if ! command -v entr &> /dev/null; then
    echo "Error: 'entr' is not installed. Please install it first:"
    echo "  Ubuntu/Debian: sudo apt-get install entr"
    echo "  macOS: brew install entr"
    echo "  Arch: sudo pacman -S entr"
    exit 1
fi

# Check if resources directory exists
if [ ! -d "$RESOURCES_DIR" ]; then
    echo "Error: Directory '$RESOURCES_DIR' does not exist."
    exit 1
fi

echo "Watching for changes in '$RESOURCES_DIR'..."
echo "Press Ctrl+C to stop"
echo ""

# Use find to list files and pipe to entr
# -r: restart the command if a new file is added
# -c: clear screen before running command
find "$RESOURCES_DIR" -type f | entr -rc sh -c '
    echo "Changes detected! Running build..."
    php artisan serve --host=0.0.0.0 --port=8000
'
