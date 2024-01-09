# Subtitle System

Subtitle System is a web application built with Laravel for managing and displaying movie subtitles.

## Table of Contents

1. [Tables Structure](#tables-structure)
3. [Details about CRUD Operations for Products and Categories](#details-about-crud-operations-for-movies-and-subtitles)
4. [Models: Movies and Subtitles](#models-movies-and-subtitles)
5. [Routes](#routes)
6. [Views Structure](#views-structure)
7. [Migrations](#migrations)
8. [Factories](#factories)
9. [Seeders](#seeders)
10. [Features](#features)
11. [Usage](#usage)
12. [License](#license)

## Tables Structure
### Users
- Default Laravel Backpack generated table.

### Movies
- **Columns**:
  - id
  - title
  - year
  - genre
  - created_at
  - updated_at

### Subtitles
- **Columns**:
  - id
  - film_id
  - content
  - created_at
  - updated_at
- **Relationship**:
  - One-to-many with Subtitles (one Movies has many Subtitles).
 

## Details about CRUD Operations for Movies and Subtitles
### FilmController
- **Index**:
  - Displays all movies.
- **Search**:
  - Filters products based on search query. Search for movie name and genre.

### SubtitlesController
- **Index**:
  - Displays all subtitles.
- **Search**:
  - Filters subtitles based on search query.

## Models: Movies and Subtitles
### Movies Model
- **Image Handling**:
  - Logic for image upload, deletion, and storage.
- **Relationships**:
  - Has many subtitles
  - Scope for search

### Subtitles Model
- **Relationships**:
  - Belongs to a movie
  - Scope for search

## Routes
### Movies
- `/movies`: movie index page.
- `/movies/search`: Search categories.

### Subtitles
- `/subtitles`: Subtitles index page.
- `/subtitles/search`: Search products.
- `/subtitles/{subtitle}`: Full subtitle display.

## Views Structure
### Movies
- Index
- Search

### Layouts
- Nav
- Master
- Footer

### Partials
- Image

### Subtitles
- Index
- Search
- Full Subtitle

### Index
- Home page.

## Migrations
- `2023_12_20_153607_create_films_table`: Creates films table.
- `2023_12_20_154229_create_subtitles_table`: Creates subtitles table.
- `2023_12_25_145153_add_image_to_films_table`: Adds image to films table.

## Factories

### Subtitles Factory

The `SubtitlesFactory` generates default instances for the Subtitles model. It generates data for attributes like content.

### Movies Factory

The `MoviestFactory` creates default instances for the Product model. It generates data for attributes like title, year and image.

## Seeders

### FilmSeeder

The `FilmSeeder` generates 20 random Film models in the db.

### SubtitleSeeder

The `SubtitleSeeder` generates 20 random Subtitle models in the db.


## Features

- **Movie Management**: Easily manage movies and their details.
- **Subtitle Management**: Create and associate subtitles with movies.
- **Search Functionality**: Search for movies and subtitles by title or genre.
- **Responsive Design**: User-friendly interface that works well on various devices.

## Usage

- **Admin Panel**: Access the admin panel at `/admin` to manage movies, subtitles, and other resources.
- **Public View**: Visit the main site to search for movies and view subtitles.

## License

This project is open-source and available under the [MIT License](LICENSE).
