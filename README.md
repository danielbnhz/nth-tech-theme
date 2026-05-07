# nth_tech theme

A custom WordPress theme built from the ground up.

## Current State

- Custom theme scaffold registered with WordPress
- Background image implemented via `style.css`
- Asset directory structure established (`assets/images/`, `assets/css/`, `assets/js/`)

## Goals

This theme is being developed toward a **blog** — a space for writing, ideas, and content
that reflects a specific aesthetic and voice rather than a generic template.

### Planned Features

- Blog index and single post templates
- Custom typography and color system
- Responsive layout built without bloat
- Minimal dependencies — no page builders, no unnecessary plugins
- Event or date-driven content elements (future)

## Structure

nth_tech-theme/
├── style.css          # Theme registration + global styles
├── functions.php      # Theme setup, enqueues
├── index.php          # Fallback template
├── assets/
│   ├── images/        # Static image assets
│   ├── css/           # Additional stylesheets
│   └── js/            # Scripts

## Dev Notes

- Theme built manually against WordPress template hierarchy
- Assets served from `/assets/` relative to theme root