<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
//
//		$this->call('UserTableSeeder');
//		$this->command->info('User table seeded!');
//
//		$this->call('CategoriesSeeder');
//		$this->command->info('Categories seeded!');

		$this->call('ProductsSeeder');
		$this->command->info('Products seeded!');
	}

}


class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'email' => 'radek@rkarkut.pl',
			'password' => Hash::make('RadKar87'),
			'confirmed' => 1
		));

		User::create(array(
			'email' => 'test@larashop.v.l',
			'password' => Hash::make('larashop'),
			'confirmed' => 1
		));
	}

}

class CategoriesSeeder extends Seeder {

	public function run()
	{
		DB::table('categories')->delete();
		DB::table('category_hierarchy')->delete();

		$root = Categorize::prepare(array(
			'type'        => 'Product',
			'title'       => 'Shop',
			'description' => 'root node'
		));

		$root->makeRoot();

		$hardware = Categorize::prepare(array(
			'type'        => 'Product',
			'title'       => 'Hardware',
			'description' => ''
		));

		$software = Categorize::prepare(array(
			'type'        => 'Product',
			'title'       => 'Software',
			'description' => ''
		));

		$hardware->makeChildOf($root);
		$software->makeChildOf($root);

	}

}

class ProductsSeeder extends Seeder {

	public function run()
	{
		DB::table('products')->delete();

		Product::create(array(
			'code' => '0001',
			'name' => 'Komputer HP Elite 8200 i5-2400/4GB/1000GB W7 FV GW',
			'description' => 'Poszukując komputera o najwyższym poziomie komfortu oraz wydajności nie da się przejść obojętnie wobec niniejszej propozycji jaką jest HP Elite 8200. Spory zapas mocy obliczeniowej oferowanej przez procesor Intel Core i5-2400 taktowany zegarem 3,100GHz pozwoli na wszechstronne wykorzystanie jednostki nawet w najbardziej wymajających aplikacjach multimedialnych. Modułowa konstrukcja dopracowana do perfekcji umożliwi dalszą rozbudowę komputera a w przyszłości idealny dostęp do wnętrza celem dokonania okresowej konserwacji. Płyta główna wyposażona w port PCI-E x16 zapewnia łatwość rozbudowy jednostki o nowoczesną kartę graficzną a specjalnie skonstruowane blokowe chłodzenie odprowadzi z wnętrza komputera szkodliwą nadwyżkę ciepła. Podsumowując – HP Elite 8200 jest komputerem idealnym do domu oraz firm gdzie wymagana jest wysoka wydajność. W połączeniu z systemem operacyjnym Windows 7 Professional otrzymujemy najwyższej klasy sprzęt za rozsądne pieniądze.'
		));

		Product::create(array(
			'code' => '0002',
			'name' => 'KOMPLETNY ZESTAW KOMPUTEROWY DELL PROMOCJA',
			'description' => 'KOMPLETNY ZESTAW KOMPUTEROWY'
		));
	}
}
