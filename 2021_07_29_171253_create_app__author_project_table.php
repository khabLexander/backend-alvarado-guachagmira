            $table->foreignId('project_id')->constrained('app.projects');
            <?php

            use Illuminate\Database\Migrations\Migration;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Support\Facades\Schema;

            class CreateAppAuthorProjectTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create('app__author_project', function (Blueprint $table) {
                        $table->id();
                        $table->foreignId('project_id')->constrained('app.projects');
                        $table->foreignId('author_id')->constrained('app.authors');
                        $table->timestamps();
                    });
                }

                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists('app__author_project');
                }
            }
