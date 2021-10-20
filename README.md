# SOLID Principles

[![tests](https://github.com/vlasscontreras/solid-principles/actions/workflows/tests.yml/badge.svg)](https://github.com/vlasscontreras/solid-principles/actions/workflows/tests.yml)

SOLID is the mnemonic acronym that represents 5 design principles that aim to make software designs more understandable, flexible, and sustainable.

In this repository, you will find a folder under `src/` for each principle and each principle has two folders: one for the **stable** version and one for the **unstable** version.

The `Stable` folder contains one of the possible ways to apply the principle to the given use case. The `Unstable` folder contains an example of how the same use case would be without applying the principle.

## 💿 Installation

Install the dependencies:

```sh
composer install --prefer-dist
```

## 🙋🏻 Usage

Run the classes by specifying the principle name (either in snake_case or kebab-case) and optionally the stable/unstable flag.

```sh
composer class [principle-name] [stable|unstable]
```

Example:

```sh
composer class single-responsibility stable
```

## 🤓 Content

### Single Responsibility

Each entity (module, class, or function) should have a single responsibility for a part of a feature in a system, and this responsibility should be encapsulated. In other words, each module should be responsible for a single thing or have only one reason to change.

### Open-Closed

Each entity should be closed for modification but open for extension.

### Liskov Substitution

If B is a subtype of A, then objects of type A should be exchangeable by objects of type B without affecting the desired result.

### Interface Segregation

A client should not be forced to depend on methods it does not use.

### Dependency Inversion

High-level modules should not import anything from low-level modules. Both should depend on abstractions.

## 📃 License

This is an open-source project licensed under the MIT license.
